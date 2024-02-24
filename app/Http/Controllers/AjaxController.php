<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class AjaxController extends Controller
{
    //
    public function getProducts(Request $request)
    {
        $numberOfRecord = Product::count();
        $perPage = 3;
        $numberOfPage = $numberOfRecord % $perPage == 0 ?
            (int) $numberOfRecord / $perPage : (int) $numberOfRecord / $perPage + 1;
        $pageIndex = 1;
        if ($request->has('pageIndex'))
            $pageIndex = $request->input('pageIndex');
        if ($pageIndex < 1) $pageIndex = 1;
        if ($pageIndex > $numberOfPage) $pageIndex = $numberOfPage;

        $cate_id = $request->input('keycate_id');
        $array_cate_id = explode(',', $cate_id);
        $brand_id = $request->input('keybrand_id');
        $array_brand_id = explode(',', $brand_id);

        $products = Product::whereIn('product_category_id', $array_cate_id)->orWhereIn('brand_id', $array_brand_id)->get();
        $output = '';
        foreach ($products as $item) {
            $output .= '<div class="col-md-4 col-xs-6">
            <div class="product">
                <div class="product-img">
                    <img src="' . $item->productImage->first()->path . '" alt="">
                    <div class="product-label">
                        <span class="sale">-30%</span>
                        <span class="new">NEW</span>
                    </div>
                </div>
                <div class="product-body">
                    <p class="product-category">' . $item->productCategory->name . '</p>
                    <h3 class="product-name"><a href="#">' . Str::limit($item->name, 40) . '</a></h3>';


            $price = $item->productDetail->min('price');
            $formattedPrice = number_format($price, 0, ',', '.'); // Định dạng giá tiền
            $PriceX = number_format($price * 1.3, 0, ',', '.');
            $output .= '<h4 class="product-price">' . $formattedPrice . ' VND<del class="product-old-price">' . $PriceX . '</del></h4> <!-- Thêm đơn vị tiền tệ -->
            <div class="product-rating">';
            $totalRating = 0;
            $totalComments = count($item->productComment);


            if ($totalComments > 0) {
                foreach ($item->productComment as $comment) {
                    $totalRating += $comment->rating;
                }

                $averageRating = round($totalRating / $totalComments, 1);
            } else {
                $averageRating = 0;
            }
            for ($i = 0; $i < $averageRating; $i++) {
                $output .= '<i class="fa fa-star"></i>';
            }
            $output .= '</div>
                <div class="product-btns">
                    <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">Yêu thích</span></button>
                    <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Xem chi tiết</span></button>
                </div>
            </div>
            <div class="add-to-cart">
                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm Giỏ Hàng</button>
            </div>
        </div>
    </div>';
        }
        // Trả về view và truyền dữ liệu JSON
        // return view('products.index')->with('jsonData', json_encode($data));
        // return response()->json($data);
        echo $output;
    }
}

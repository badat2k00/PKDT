<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Đăng nhập</title>

		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('css/slick-theme.css')}}"/>

		<link type="text/css" rel="stylesheet" href="{{asset('css/nouislider.min.css')}}"/>

		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"/>

        <meta name="csrf-token" content="{{ csrf_token() }}">
        

    </head>

<body >
        <header>
        <div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 0987654321</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> nhom3@email.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 175 Tây Sơn, Đống Đa, Hà Nội</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li>
							<!-- nếu đã đăng nhập
							<a href="#"><i class="fa fa-dollar"></i> Ví</a> -->
						</li>
						<li>
							<!-- nếu chưa đăng nhập -->
							<a href="{{route('login')}}"><i class="fa fa-user-o"></i> Đăng nhập</a>
							<!-- nếu đã đăng nhập
							<a href="#"><i class="fa fa-user-o"></i> Tài khoản</a> -->
						</li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="./img/logo.png" alt="" style="width:100%">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<input class="input" placeholder="Bạn muốn tìm gì...">
									<button class="search-btn">Tìm kiếm</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<div>
									<a href="#">
										<i class="fa fa-heart"></i>
										<span>DS yêu thích</span>
										<!-- <div class="qty">2</div> -->
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Giỏ hàng</span>
										<!-- <div class="qty">3</div> -->
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
        </header>
        <main>
            <div class="container" >
                <div class="card text-center" style="margin-top: 2%; margin-bottom: 5%;">
                    <div class="card-header ">
                        <h2>ĐĂNG KÝ</h2>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                            <label for="exampleInputName" class="form-label">Họ tên</label>
                            <input type="name" class="form-control" id="exampleInputName">
                        </div>
                        <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                            <label for="exampleInputEmail1" class="form-label">Email hoặc SĐT</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                            <label for="exampleInputCfPassword1" class="form-label">Xác nhận mật khẩu</label>
                            <input type="cfpassword" class="form-control" id="exampleInputCfPassword1">
                        </div>
                        <button type="submit" class="btn primary-btn submit">Đăng ký</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </main>
        <footer id="footer">

        </footer>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/slick.min.js')}}"></script>
        <script src="{{asset('js/nouislider.min.js')}}"></script>
        <script src="{{asset('js/jquery.zoom.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>

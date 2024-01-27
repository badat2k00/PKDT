@extends('layouts.app')
@section('title', 'Đăng ký')
@section('main')
<div class="container" >
    <div class="card text-center" style="margin-top: 3%; margin-bottom: 5%;">
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
@endsection

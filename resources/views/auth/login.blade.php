@extends('layouts.app')
@section('title', 'Đăng nhập')
@section('main')
<div class="container" >
    <div class="card text-center" style="margin-top: 2%; margin-bottom: 5%;">
        <div class="card-header ">
            <h2>ĐĂNG NHẬP</h2>
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                <label for="email" class="form-label">Email hoặc SĐT</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="input-checkbox text-left" style="margin: 2%; margin-left:25%; margin-right:25%;">
                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
				<label for="remember">
				    <span></span> Nhớ mật khẩu
				</label>
            </div>
            <button type="submit" class="btn primary-btn submit">Đăng nhập</button>
            </form>
        </div>
        <div class="card-footer" style="margin-top:2%; margin-left:25%; margin-right:25%;">
            <div class="row" style="display: flex; justify-content: center">
                <div class="col">Chưa có tài khoản?</div>
                <div class="col" style="width:2%"></div>
                <div class="col"><a href="{{route('register')}}" class="text-decoration-none">Đăng ký</a></div>
            </div>
            <div class="row" style="margin-top:2%;">
                <div class="col-md-6 text-center">
                    <a href="#">
                        <i class="fa fa-facebook fa-2x" id="fb"></i>
                        <label for="fb" style="margin-left:2%; margin-bottom:2%; cursor:pointer;">Đăng nhập Facebook</label>
                    </a>
                    
                </div>
                <div class="col-md-6 text-center">
                    <a href="#">
                        <i class="fa fa-google fa-2x" id="gg"></i>
                        <label for="gg" style="margin-left:2%; margin-bottom:2%; cursor:pointer;">Đăng nhập Google</label>
                    </a>
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forgot</title>
    <link rel="icon" type="image/png" href="/images/icon.ico" />

    <!-- CSS -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/all.css') }}">
    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/bootstrap.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('Admins/css/style.css') }}">
</head>

<body class="body-container">

<div class="container-wrapper">
    <form action="{{route('password.update')}}" method="POST" class="form-signin">
        @csrf
        <h2 class="form-signin-heading text-center">Đổi mật khẩu</h2>
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <input type="email" class="form-control" name="email" id='email' @error('email') is-invalid @enderror placeholder="Nhập địa chỉ email" value="{{ old('email',$email) }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id='password' placeholder="Nhập mật khẩu">
            @error('password')
            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password_confirmation" id='password_confirmation' placeholder="Xác nhận mật khẩu">
        </div>
        <button class="btn btn-lg btn-primary btn-block">
            Hoàn tất
        </button>
    </form>
</div>


<!-- SCRIPT -->
<!-- Jquery JS -->
<script src="{{ URL::asset('Admins/script/jquery-3.4.1.js') }}"></script>
<!-- Font Awesome JS -->
<script src="{{ URL::asset('Admins/script/all.js') }}"></script>
<!-- Boostrap JS -->
<script src="{{ URL::asset('Admins/script/bootstrap.js') }}"></script>
<!-- Popper JS -->
<script src="{{ URL::asset('Admins/script/popper.min.js') }}"></script>
<!-- Validate From JS -->
<script src="{{ URL::asset('Admins/script/validate.js') }}"></script>
<!-- Custom JS -->
<script src="{{ URL::asset('Admins/script/scr-db.js') }}"></script>

</body>

</html>

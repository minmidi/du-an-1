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
    <form action="{{ route('password.email') }}" method="POST" class="form-signin">
        @csrf
        <h2 class="form-signin-heading text-center">Quên tài khoản</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="form-group">
            <input type="email" class="form-control" name="email" id='email' placeholder="Nhập email">

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

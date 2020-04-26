<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container-wrapper">
        <form action="{{ route('order.store') }}" method="POST" class="form-signin">
            @csrf
            <h2 class="form-signin-heading text-center">Gửi mail</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="email" id='email' placeholder="Nhập email">
                @if($errors->has('email'))
                    {{$errors->first('email')}}
                @endif
            </div>

            <div class="form-group">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên">
                @if($errors->has('name'))
                    {{$errors->first('name')}}
                @endif
            </div>
            <button class="btn btn-lg btn-primary btn-block">
                Gửi
            </button>
        </form>
    </div>
</body>
</html>

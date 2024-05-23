<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compalible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/TK.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
    <Title>Технотек</Title>
    <link rel="stylesheet" href="source_img\Дипломка\meow\styles.css"></head>
<?php
$imgPath = 'https://img.freepik.com/free-photo/liquid-marbling-paint-texture-background-fluid-painting-abstract-texture-intensive-color-mix-wallpaper_1258-99284.jpg?t=st=1716471174~exp=1716474774~hmac=87936da459beb4bb2d320d96a335d87d3e004af933d6b56e0a0c8d8da9404286&w=1800';
?>
<body style="padding-left: 20px;background-image: url('<?=$imgPath?>;')">

@include('messages')
<div style="padding-top: 100px">
<div class="form-control" style="width: 500px;border-radius: 8px">
    <legend style="text-align: center;padding-top: 30px;padding-bottom: 70px">Авторизация</legend>
    <div class="" style="text-align: center">
        <label for="email" class="form-label">Логин</label>
        <input class="form-control" type="text" id="email" name="email">
    </div>
    <div class="" style="text-align: center">
        <label for="password" class="form-label">Пароль</label>
        <input class="form-control" type="password" id="password" name="password">
    </div>

    <div style="padding-top: 70px;text-align: center">
    <div style="padding-bottom: 20px">
        <a href="{{ route('main_auth') }}" type="button" class="btn btn-primary">Авторизироваться</a>
    </div>
    <div style="padding-bottom: 20px">
        <a href="{{ route('account') }}" type="button" class="btn btn-secondary">Зарегистрироваться</a>
    </div>
    </div>
</div>

</div>

<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>

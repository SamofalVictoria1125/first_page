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
<body style="padding-left: 20px">

@include('messages')

<div class="form-group">
    <legend>Авторизация</legend>
    <div class="col-2">
        <label for="name" class="form-label">ФИО клиента</label>
        <input class="form-control" type="text" id="name" name="name">
    </div>
    <div class="col-2">
        <label for="email" class="form-label">Логин</label>
        <input class="form-control" type="text" id="email" name="email">
    </div>
    <div class="col-2">
        <label for="password" class="form-label">Пароль</label>
        <input class="form-control" type="password" id="password" name="password">
    </div>

    <div style="padding-top: 20px">
        <button type="submit" class="btn btn-primary">Авторизироваться</button>
    </div>
    <div style="padding-top: 20px">
        <a href="{{ route('account') }}" type="button" class="btn btn-secondary">Зарегистрироваться</a>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compalible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/TK.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <Title>Технотек</Title>
    <link rel="stylesheet" href="{{asset('/source_img/Дипломка/meow/styles.css')}}"></head>
<body style="padding-left: 20px">

@include('messages')

<h1 style="padding-top: 20px">Панель управления</h1>
<form action="/cataloge/submit" method="post" style="padding-top: 50px" enctype="multipart/form-data">
 @csrf
    <div class="form-group">
        <legend>Заполнение формы товара</legend>
        <div class="col-2">
            <label for="name" class="form-label">Наименование товара</label>
            <input class="form-control" type="text" id="name" name="name">
        </div>
        <div class="col-2">
            <label for="firm" class="form-label">Фирма</label>
            <input class="form-control" type="text" id="firm" name="firm">
        </div>
        <div class="col-4">
            <label for="info" class="form-label">Описание</label>
            <textarea class="form-control" type="text" id="info" name="info"></textarea>
        </div>

        <div class="form-group" style="padding-bottom: 20px; padding-top: 20px">
            <input type="file" class="form-control-file" id="image" name="image">
        </div>


        <div class="col-2">
        <div style="padding-top: 20px">
        <button type="submit" class="btn btn-primary">Добавить</button>
            <a href="{{ route('cataloge-all') }}" type="button" class="btn btn-secondary">Получить</a>
        </div>
        </div>
    </div>

</form>
</div>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>



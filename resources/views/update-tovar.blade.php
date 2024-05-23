<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compalible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Inter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/TK.ico" type="image/x-icon">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/fontello.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/css/style.css">
    <Title>Технотек</Title>
    <link rel="stylesheet" href="http://127.0.0.1:8000/source_img\Дипломка\meow\styles.css"></head>
<body style="padding-left: 20px">

@include('messages')

<h1 style="padding-top: 20px">Редактор товара</h1>
<form action="{{ route('update-tovar-submit', $data->id) }}" method="post" style="padding-top: 50px">
 @csrf
    <div class="form-group">
        <legend>Редактирование товара</legend>
        <div class="col-2">
            <label for="name" class="form-label">Наименование товара</label>
            <input class="form-control" type="text" value="{{ $data->name }}" name="name">
        </div>
        <div class="col-2">
            <label for="firm" class="form-label">Фирма</label>
            <input class="form-control" type="text" value="{{ $data->firm }}" name="firm">
        </div>
        <div class="col-4">
            <label for="info" class="form-label">Описание</label>
            <textarea class="form-control" type="text" id="info" name="info">{{ $data->info }}</textarea>
        </div>

        <div style="padding-top: 20px">
        <button type="UpdateTovarSubmit" class="btn btn-primary">Обновить</button>
        </div>
    </div>

</form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>



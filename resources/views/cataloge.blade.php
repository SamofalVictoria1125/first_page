@extends('carcas')
@section('title')
    Избранное
@endsection
@section('content')
    <div class="container">
        <div class="col-8">
            <h1>Добавить технику</h1>
            <form method="post" action="{{ route('tovaris.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="Name">Наименование товара</label>
                    <input type="text" class="form-control" id="Name" name="Name">
                </div>
                <div class="form-group">
                    <label for="Info">Описание товара</label>
                    <textarea class="form-control" id="Info" rows="3" name="Info"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Изображение товараp</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
@endsection

@extends('carcas')
@section('title')
    Каталог товаров
@endsection
@section('content')
    <div style="padding-left: 40px">
    <div class="row justify-content-start fw-bold" style="font-size: 50px; padding-top: 50px; padding-bottom: 70px;">
        <div class="col-auto">Список всех</div>
        <div class="col" style="color: red;">ТОВАРОВ</div>
    </div>
    @foreach($data as $el)
        <div class="card" style="width: 40rem;">
            <div class="card-body">
            <h3>{{ $el->name}}</h3>
            <h4>{{ $el->info}}</h4>
            <h4>{{ $el->firm}}</h4>
                <a href="{{ route('tovar-data-one', $el->id) }}" type="button" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    @endforeach
    </div>
@endsection

@extends('carcas')
@section('title-block')
    {{ $data->name }}
@endsection
@section('content')
    <div class="col-4" style="padding-left: 40px;">
    <h1 style="padding-bottom: 30px">{{ $data->name }}</h1>
        <div class="card" style="width: 40rem;scroll-padding-bottom: auto">
            <div class="card-body">
            <h4>{{ $data->info}}</h4>
            <h4>{{ $data->firm}}</h4>
                <a href="{{ route('update-tovar', $data->id) }}" type="button" class="btn btn-primary">Редактировать</a>
                <a href="{{ route('delete-tovar', $data->id) }}" type="button" class="btn btn-secondary">Удалить</a>
            </div>
        </div>
    </div>
@endsection

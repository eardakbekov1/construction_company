@extends('houses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Создание нового дома</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('houses.index') }}">Назад</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('houses.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <strong>Название дома:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Введите название дома">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <strong>Дата завершения строительства:</strong>
                    <input type="text" name="completion_date" class="form-control" placeholder="Введите дату завершения строительства в формате 2023-02-23">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <strong>Количество этажей:</strong>
                    <input type="text" name="number_of_floors" class="form-control" placeholder="Количество этажей">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <strong>Цена:</strong>
                    <input type="text" name="price" class="form-control" placeholder="Введите цена за 1 кв. метр в долларах">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

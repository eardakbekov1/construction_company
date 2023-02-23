@extends('houses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Дом: {{ $house->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('houses.index') }}">Назад</a>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Название дома:</strong>
                {{ $house->name }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дата завершения строительства:</strong>
                {{ $house->completion_date }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Количество этажей:</strong>
                {{ $house->number_of_floors }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Цена:</strong>
                {{ $house->price }}
            </div>
        </div>
    </div>
@endsection

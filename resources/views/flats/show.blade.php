@extends('flats.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Квартира в доме: {{ $flat->house_id }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('flats.index') }}">Назад</a>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Площадь квартиры:</strong>
                {{ $flat->square }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Этаж:</strong>
                {{ $flat->floor }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Количество комнат:</strong>
                {{ $flat->number_of_rooms }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дом:</strong>
                {{ $flat->house_id }}
            </div>
        </div>
    </div>
@endsection

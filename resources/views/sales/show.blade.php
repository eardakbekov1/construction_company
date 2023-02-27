@extends('sales.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Сделка купле-продажи квартиры:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sales.index') }}">Назад</a>
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дата подписания договора о купле-продаже квартиры:</strong>
                {{ $sale->sale_date }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Клиент:</strong>
                {{ $sale->client->name }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Квартира:</strong>
                {{ $sale->flat->flat_number }}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дом:</strong>
                {{ $sale->house->name }}
            </div>
        </div>
    </div>
@endsection

@extends('sales.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Изменить данные о договоре купле-продажи квартиры:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sales.index') }}">Назад</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            Возникли проблемы при обработке запроса.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sales.update',$sale->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Дата подписания договора о совершении сделки купле-продажи квартиры:</strong>
                    <input type="text" name="sale_date" value="{{ $sale->sale_date }}" class="form-control" placeholder="Введите квадратуру квартиры">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Клиент:</strong>
                    <input type="text" name="client_id" value="{{ $sale->client_id }}" class="form-control" placeholder="Выберите клиента">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Квартира:</strong>
                    <input type="text" name="flat_id" value="{{ $sale->flat_id }}" class="form-control" placeholder="Выберите квартиру">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Выберите дом:</strong>
                    <input type="text" name="house_id" value="{{ $sale->house_id }}" class="form-control" placeholder="Выберите дом">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

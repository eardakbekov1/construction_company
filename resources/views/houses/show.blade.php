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
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Дата завершения строительства:</strong>
                {{ $house->completion_date }}
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Количество этажей:</strong>
                {{ $house->number_of_floors }}
            </div>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Цена:</strong>
                {{ $house->price }}
            </div>
        </div>
    </div>
<p></p>
    <h3>Продажи дома: {{ $house->name }}</h3>
    <p></p>
<div>
    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Дата подписания договора</th>
            <th>Клиент</th>
            <th>Площадь</th>
            <th>Дом</th>
            <th>Управление</th>
        </tr>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sale->sales_sale_date }}</td>
                <td>{{ $sale->client_name }}</td>
                <td>{{ $sale->flat_square }}</td>
                <td>{{ $sale->house_name }}</td>
                <td>
                    <form action="{{ route('sales.destroy',$sale->sales_id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('sales.show',$sale->sales_id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('sales.edit',$sale->sales_id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection

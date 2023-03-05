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
                    <label for="saleSaleDateUpdateFormControl">Дата подписания договора о совершении сделки купле-продажи квартиры:</label>
                    <input id="saleSaleDateUpdateFormControl" type="date" name="sale_date" value="{{ $sale->sale_date }}" class="form-control" placeholder="Введите квадратуру квартиры">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="saleClientIdUpdateFormControl">Клиент:</label>
                    <select id="saleClientIdUpdateFormControl" class="form-select" name="client_id" aria-label="Default select example">
                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="saleFlatIdUpdateFormControl">Квартира:</label>
                    <select id="saleFlatIdUpdateFormControl" class="form-select"  name="flat_id" aria-label="Default select example">
                        @foreach($flats as $flat)
                            <option value="{{$flat->id}}">{{$flat->flat_number}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="saleHouseIdUpdateFormControl">Выберите дом:</label>
                    <select id="saleHouseIdUpdateFormControl" class="form-select"  name="house_id" aria-label="Default select example">
                        @foreach($houses as $house)
                            <option value="{{$house->id}}">{{$house->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

@extends('sales.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Добавление записи о сделке купле-продажи</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sales.index') }}">Назад</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            Возникли проблемы при обработке Вашего запроса.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sales.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="saleSaleDateStoreFormControl">Дата подписания договора о купле-продаже квартиры:</label>
                    <input id="saleSaleDateStoreFormControl" type="date" name="sale_date" class="form-control" placeholder="Выберите дату подписания договора">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="saleClientIdStoreFormControl">Клиент:</label>
                    <select id="saleClientIdStoreFormControl" class="form-select"  name="client_id" aria-label="Default select example">
                        @foreach($clients as $client)
                            <option value="{{$client->id}}">{{$client->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="saleFlatIdStoreFormControl">Квартира:</label>
                    <select id="saleFlatIdStoreFormControl" class="form-select"  name="flat_id" aria-label="Default select example">
                        @foreach($flats as $flat)
                            <option value="{{$flat->id}}">{{$flat->flat_number}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="saleHouseIdStoreFormControl">Дом:</label>
                    <select id="saleHouseIdStoreFormControl" class="form-select"  name="house_id" aria-label="Default select example">
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

@extends('flats.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Создание новой квартиры</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('flats.index') }}">Назад</a>
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

    <form action="{{ route('flats.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="flatFlatNumberStoreFormControl">Номер квартиры:</label>
                    <input id="flatFlatNumberStoreFormControl" type="text" name="flat_number" class="form-control" placeholder="Введите номер квартиры">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="flatSquareStoreFormControl">Площадь квартиры:</label>
                    <input for="flatSquareStoreFormControl" type="text" name="square" class="form-control" placeholder="Введите квадратуру квартиры">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="flatFloorStoreFormControl">Этаж:</label>
                    <input id="flatFloorStoreFormControl" type="text" name="floor" class="form-control" placeholder="Введите этаж">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="flatNumberOfRoomsStoreFormControl">Количество комнат:</label>
                    <input id="flatNumberOfRoomsStoreFormControl" type="text" name="number_of_rooms" class="form-control" placeholder="Введите количество комнат">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="flatHouseIdStoreFormControl">Дом:</label>
                        <select for="flatHouseIdStoreFormControl" class="form-select"  name="house_id" aria-label="Default select example">
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

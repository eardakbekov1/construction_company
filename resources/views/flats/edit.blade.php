@extends('flats.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Изменить данные о квартире:</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('flats.index') }}">Назад</a>
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

    <form action="{{ route('flats.update',$flat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="flatFlatNumberUpdateFormControl">Номер квартиры:</label>
                    <input id="flatFlatNumberUpdateFormControl" type="text" name="flat_number" value="{{ $flat->flat_number }}" class="form-control" placeholder="Введите номер квартиры">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="flatSquareUpdateFormControl">Площадь квартиры:</label>
                    <input id="flatSquareUpdateFormControl" type="text" name="square" value="{{ $flat->square }}" class="form-control" placeholder="Введите квадратуру квартиры">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="flatFloorUpdateFormControl">Этаж:</label>
                    <input id="flatFloorUpdateFormControl" type="text" name="floor" value="{{ $flat->floor }}" class="form-control" placeholder="Введите этаж">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="flatNumberOfRoomsUpdateFormControl">Количество комнат:</label>
                    <input id="flatNumberOfRoomsUpdateFormControl" type="text" name="number_of_rooms" value="{{ $flat->number_of_rooms }}" class="form-control" placeholder="Введите количество комнат">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="flatHouseIdUpdateFormControl">Выберите дом:</label>
                    <select id="flatHouseIdUpdateFormControl" class="form-select"  name="house_id" aria-label="Default select example">
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

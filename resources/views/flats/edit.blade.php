@extends('flats.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Изменить данные о квартире: {{ $flat->name }}</h2>
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
                    <strong>Площадь квартиры:</strong>
                    <input type="text" name="square" value="{{ $flat->square }}" class="form-control" placeholder="Введите квадратуру квартиры">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Этаж:</strong>
                    <input type="text" name="floor" value="{{ $flat->floor }}" class="form-control" placeholder="Введите этаж">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Количество комнат:</strong>
                    <input type="text" name="number_of_rooms" value="{{ $flat->number_of_rooms }}" class="form-control" placeholder="Введите количество комнат">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Выберите дом:</strong>
                    <input type="text" name="house_id" value="{{ $flat->house_id }}" class="form-control" placeholder="Введите цену за 1 квадратный метр в долларах">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

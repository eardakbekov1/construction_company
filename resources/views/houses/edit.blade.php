@extends('houses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Изменить данные о доме: {{ $house->name }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('houses.index') }}">Назад</a>
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

    <form action="{{ route('houses.update',$house->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="houseNameUpdateFormControl">Название дома:</label>
                    <input id="houseNameUpdateFormControl" type="text" name="name" value="{{ $house->name }}" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required placeholder="Введите название дома">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="houseCompletionDateUpdateFormControl">Дата завершения строительства:</label>
                    <input id="houseCompletionDateUpdateFormControl" type="date" name="completion_date" value="{{ $house->completion_date }}" class="form-control" placeholder="Введите дату завершения строительства">
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="houseNumberOfFloorsUpdateFormControl">Количество этажей:</label>
                    <input id="houseNumberOfFloorsUpdateFormControl" type="text" name="number_of_floors" value="{{ $house->number_of_floors }}" class="form-control @error('number_of_floors') is-invalid @enderror" value="{{old('number_of_floors')}}" required placeholder="Введите количество этажей">
                    @error('number_of_floors')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="housePriceUpdateFormControl">Цена за квадратный метр в долларах:</label>
                    <input id="housePriceUpdateFormControl" type="text" name="price" value="{{ $house->price }}" class="form-control  @error('price') is-invalid @enderror" value="{{old('price')}}" required placeholder="Введите цену за 1 квадратный метр в долларах">
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <p></p>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>

    </form>
@endsection

@extends('houses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Создание нового дома</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('houses.index') }}">Назад</a>
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

    <form action="{{ route('houses.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="houseNameStoreFormControl">Название дома:</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" required id="houseNameStoreFormControl" placeholder="Введите название дома">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="houseCompletionDateStoreFormControl">Дата завершения строительства:</label>
                    <input type="text" name="completion_date" class="form-control" id="houseCompletionDateStoreFormControl" placeholder="Введите дату завершения строительства в формате 2023-02-23">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="houseNumberOfFloorsStoreFormControl">Количество этажей:</label>
                    <input name="number_of_floors" type="number" class="form-control @error('number_of_floors') is-invalid @enderror" value="{{old('number_of_floors')}}" required id="houseNumberOfFloorsStoreFormControl" placeholder="Количество этажей">
                    @error('number_of_floors')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <p></p>
                    <label for="housePriceStoreFormControl">Цена:</label>
                    <input name="price" type="number" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" required id="housePriceStoreFormControl" placeholder="Введите цена за 1 кв. метр в долларах">
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

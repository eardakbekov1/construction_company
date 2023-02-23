@extends('houses.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Дома</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('houses.create') }}">Создать новый дом</a>
            </div>
            <p></p>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>Название дома</th>
            <th>Дата завершения строительства</th>
            <th>Количество этажей</th>
            <th>Цена за 1 кв метр в долларах</th>
            <th>Управление</th>
        </tr>
        @foreach ($houses as $house)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $house->name }}</td>
                <td>{{ $house->completion_date }}</td>
                <td>{{ $house->number_of_floors }}</td>
                <td>{{ $house->price }}</td>
                <td>
                    <form action="{{ route('houses.destroy',$house->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('houses.show',$house->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('houses.edit',$house->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $houses->links() !!}

@endsection

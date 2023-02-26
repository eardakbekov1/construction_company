@extends('flats.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Квартиры</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('flats.create') }}">Создать новую квартиру</a>
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
            <th>Площадь квартиры</th>
            <th>Этаж</th>
            <th>Количество комнат</th>
            <th>Дом</th>
            <th>Управление</th>
        </tr>
        @foreach ($flats as $flat)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $flat->square }}</td>
                <td>{{ $flat->floor }}</td>
                <td>{{ $flat->number_of_rooms }}</td>
                <td>{{ $flat->house->name }}</td>
                <td>
                    <form action="{{ route('flats.destroy',$flat->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('flats.show',$flat->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('flats.edit',$flat->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $flats->links() !!}

@endsection

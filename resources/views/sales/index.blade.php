@extends('sales.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Продажи</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sales.create') }}">Создать запись о сделке купле-продажи квартиры</a>
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
            <th>Дата подписания договора</th>
            <th>Клиент</th>
            <th>Номер квартиры</th>
            <th>Дом</th>
            <th>Управление</th>
        </tr>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $sale->sale_date }}</td>
                <td>{{ $sale->client->name }}</td>
                <td>{{ $sale->flat->flat_number }}</td>
                <td>{{ $sale->house->name }}</td>
                <td>
                    <form action="{{ route('sales.destroy',$sale->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('sales.show',$sale->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('sales.edit',$sale->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $sales->links() !!}

@endsection

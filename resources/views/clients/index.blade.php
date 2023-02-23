@extends('clients.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Клиенты</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('clients.create') }}">Создать нового клиента</a>
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
            <th>ФИО клиента</th>
            <th>Номер телефона клиента</th>
            <th>Email</th>
            <th>Управление</th>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone_number }}</td>
                <td>{{ $client->email }}</td>
                <td>
                    <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('clients.show',$client->id) }}">Показать</a>

                        <a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Изменить</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $clients->links() !!}

@endsection

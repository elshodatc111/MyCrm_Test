@extends('admin.layout')

@section('content')

<div class="container">
    <h5 class="w-100 text-center">Murojatlar</h5>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>FIO</th>
                <th>Phone</th>
                <th>Text</th>
                <th>Murohat vaqti</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($Contact as $item)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td style="text-align:left">{{ $item['name'] }}</td>
                <td>{{ $item['phone'] }}</td>
                <td>{{ $item['text'] }}</td>
                <td>{{ $item['created_at'] }}</td>
                <td><a href="{{ route('AdminContactDel',$item['id']) }}">del</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
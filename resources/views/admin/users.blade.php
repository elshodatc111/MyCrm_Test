@extends('admin.layout')

@section('content')

<div class="container">
    <h4 class="w-100 text-center">Users</h4>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>FIO</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Ro'yhatdan o'tdi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($User as $item)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <th style="text-align:left">{{ $item['name'] }}</th>
                <td>{{ $item['phone'] }}</td>
                <td>{{ $item['email'] }}</td>
                <td>{{ $item['created_at'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
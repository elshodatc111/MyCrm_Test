@extends('admin.layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="container">
    <div class="card mt-lg-0 mt-2">
        <div class="card-header">Kurs Mavzusini yangilash</div>
        <div class="card-body">
            <form action="{{ route('adminMavzuCreateUpdate') }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-6">
                        <input type="hidden" name="cours_id" value="{{ $Mavzu['cours_id'] }}">
                        <input type="hidden" name="mavzu_id" value="{{ $Mavzu['id'] }}">
                        <label for="mavzu_name">Mavzu nomi</label>
                        <input type="text" name="mavzu_name" value="{{ $Mavzu['mavzu_name'] }}" class="form-control" required>
                        <label for="text" class="mt-2">Mavzu haqida</label>
                        <textarea name="text" style="height:90px;" class="form-control">{{ $Mavzu['text'] }}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <label for="video" class="mt-lg-0 mt-2">Video link</label>
                        <input type="text" name="video" value="{{ $Mavzu['video'] }}" class="form-control" required>
                        <label for="number" class="mt-2">Mavzu tartib raqami</label>
                        <input type="number" name="number" value="{{ $Mavzu['number'] }}" class="form-control" required>
                        <button class="btn btn-primary w-100 mt-2">Mavzuni saqlash</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
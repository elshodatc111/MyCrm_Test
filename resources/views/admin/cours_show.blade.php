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
    <div class="row mb-3">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">{{ $Cours['cours_name'] }}</div>
                <div class="card-body" style="height:400px">
                    <iframe width="100%" src="https://www.youtube.com/embed/{{ $Cours['video'] }}"></iframe>
                    <img src="../../../images/{{ $Cours['image'] }}" style="width:50%;">
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">{{ $Cours['cours_name'] }}</div>
                <div class="card-body" style="height:400px">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>CRM Cours: </b> {{ $Cours['crm_user_id'] }}</li>
                        <li class="list-group-item"><b>O'qituvchi: </b> {{ $Cours['techer'] }}</li>
                        <li class="list-group-item"><b>Narxi: </b> {{ $Cours['price1'] }} so'm</li>
                        <li class="list-group-item"><b>Talabalarga: </b> {{ $Cours['price2'] }} so'm</li>
                        <li class="list-group-item"><b>Azolik: </b> {{ $Cours['azolik'] }} kun</li>
                        <li class="list-group-item"><b>Davomiyligi: </b> {{ $Cours['davomiyligi'] }}</li>
                        <li class="list-group-item">
                            <b>Min Text:</b>
                            {{ $Cours['min_text'] }}
                        </li>
                        <li class="list-group-item">
                            <b>Max Text:</b>
                            {{ $Cours['max_text'] }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card mt-lg-0 mt-2">
                <div class="card-header">Kursga yangi mavzu qo'shish</div>
                <div class="card-body" style="height:400px">
                    <form action="{{ route('adminMavzuCreate') }}" method="post">
                        @csrf
                        <input type="hidden" name="cours_id" value="{{ $Cours['id'] }}">
                        <label for="mavzu_name">Mavzu nomi</label>
                        <input type="text" name="mavzu_name" class="form-control" required>
                        <label for="text" class="mt-2">Mavzu haqida</label>
                        <textarea name="text" style="height:90px;" class="form-control"></textarea>
                        <label for="video" class="mt-lg-0 mt-2">Video link</label>
                        <input type="text" name="video" class="form-control" required>
                        <label for="number" class="mt-2">Mavzu tartib raqami</label>
                        <input type="number" name="number" class="form-control" required>
                        <button class="btn btn-primary w-100 mt-2">Mavzuni saqlash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($Mavzu as $item)
            <div class="col-lg-4">
                <div class="p-1 mt-2 bg-white" style="border:1px solid #000;text-align:center">
                    <h3>{{ $item['mavzu_name'] }}</h3>
                    {{ $item['text'] }}
                    <hr class="m-0 p-0">
                    <div class="row">
                        <div class="col-4">
                            <a href="{{ route('adminShowMavzuUpdate',$item['id']) }}" class="btn btn-primary w-100">
                                <i class="bi bi-pencil"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ $item['video'] }}" class="btn btn-primary w-100">
                                <i class="bi bi-play"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('adminMavzuCreateUpdateDelete',$item['id']) }}" class="btn btn-danger w-100">
                                <i class="bi bi-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        
        
</div>

@endsection
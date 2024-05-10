@extends('admin.layout')

@section('content')

<div class="row">
    <div class="col-lg-8 mt-1">
        <div class="row">
            @foreach($Book as $item)
            <div class="col-lg-4">
                <div class="card mb-2" style="width: 100%;">
                    <img class="card-img-top" src="../images/{{ $item->image }}" style="height:270px">
                    <div class="card-body">
                        <h5 class="card-text">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->autor }}</p>
                        <a href="../books/{{ $item->link }}" class="btn btn-primary w-50">Kitob</a>
                        <a href="{{ route('AdminBookDelete',$item['id']) }}" class="btn btn-danger w-50">O'chirish</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-4 mt-1">
        <div class="card" style="width: 100%;">
            <div class="card-header">Yangi kitob yuklash</div>
            <div class="card-body">
                <form action="{{ route('AdminBookCreate') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="name">Kitob nomi</label>
                    <input type="text" name="name" required class="form-control" required>
                    <label for="autor" class="mt-1">Kitob muallfi</label>
                    <input type="text" name="autor" required class="form-control" required>
                    <label for="link" class="mt-1">Kitob (.pdf, max:50mb)</label>
                    <input type="file" name="link" required class="form-control" required>
                    <label for="image" class="mt-1">Kitob image (.jpg)</label>
                    <input type="file" name="image" required class="form-control" required>
                    <button type="submit" class="btn btn-primary w-100 mt-1">Kitobni saqlash</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
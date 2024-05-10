@extends('admin.layout')

@section('content')

<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            Yangi o'qituvchi qo'shish
        </div>
        <div class="card-body">
            <form action="{{ route('AdminTecherCreate') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <label for="name" class="mt-2">O'qituvchi</label>
                        <input type="text" name="name" required class="form-control">
                        <label for="about" class="mt-2">O'qituvchi haqida</label>
                        <input type="text" name="about" required class="form-control">
                        <label for="image" class="mt-2">O'qituvchi rasmi(.jpg jpeg, .png)</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <label for="telegram" class="mt-2">Telegram</label>
                        <input type="text" name="telegram" required class="form-control">
                        <label for="instagram" class="mt-2">Instagram</label>
                        <input type="text" name="instagram" required class="form-control">
                        <label for="facebook" class="mt-2">Facebook</label>
                        <input type="text" name="facebook" required class="form-control">
                    </div>
                    <div class="col-lg-12 text-center">
                        <button type="submit" class="btn btn-primary mt-3">O'qituvchini saqlash</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach($Techer as $item)
        <div class="col-lg-4">
            <div class="card text-center mb-2" style="width: 100%;">
                <img style="width:100px;height:100px;margin:0 auto;border-radius:50%" src="../images/{{ $item['image'] }}" 
                    alt="Tecehr Image">
                <div class="card-body">
                    <h5>{{ $item['name'] }}</h5>
                    <p class="card-text">{{ $item['about'] }}</p>
                    <table class="table table-bordered">
                        <tr>
                            <td><a href="{{ $item['telegram'] }}" target="_blank">Telegram</a></td>
                            <td><a href="{{ $item['facebook'] }}" target="_blank">Facebook</a></td>
                            <td><a href="{{ $item['instagram'] }}" target="_blank">Instagram</a></td>
                        </tr>
                    </table>
                    <a href="{{ route('AdminTecherDelete',$item['id']) }}" class="btn btn-danger">O'chirish</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
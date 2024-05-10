@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 text-center">
            <h4>Catigoreys</h4>
        </div>
        @foreach($Catigory as $item)
        <div class="col-lg-3 col-6 mb-2">
            <div class="card text-center">
                <div class="card-body" style="min-height:150px">
                    <h5 class="card-title">{{ $item['type'] }}</h5>
                    <form action="{{ route('catigory_update') }}" method="post">
                        @csrf
                        <input type="hidden" name="type" value="{{ $item['type'] }}">
                        <input type="hidden" name="id" value="{{ $item['id'] }}">
                        <textarea name="name" class="form-control" required>{{ $item['name'] }}</textarea>
                        <button class="btn btn-primary w-100 mt-1">Saqlash</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
<hr>
    <form action="{{ route('setting_update') }}" method="post" class="pt-3">
        @csrf
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4>Settings</h4>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card mt-3">
                    <div class="card-body" style="min-height:300px">
                        <h6 class="card-title">Phone</h6>
                        <input type="text" class="form-control" name="phone" value="{{ $Setting['phone'] }}" required>
                        <h6 class="card-title">Email</h6>
                        <input type="text" class="form-control" name="email" value="{{ $Setting['email'] }}" required>
                        <h6 class="card-title">Sayt</h6>
                        <input type="text" class="form-control" name="sayt" value="{{ $Setting['sayt'] }}" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-6">
                <div class="card mt-3">
                    <div class="card-body" style="min-height:300px">
                        <h6 class="card-title">Telegram</h6>
                        <input type="text" class="form-control" name="telegram" value="{{ $Setting['telegram'] }}" required>
                        <h6 class="card-title">Instagram</h6>
                        <input type="text" class="form-control" name="instagram" value="{{ $Setting['instagram'] }}" required>
                        <h6 class="card-title">Facebook</h6>
                        <input type="text" class="form-control" name="facebook" value="{{ $Setting['facebook'] }}" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card mt-3">
                    <div class="card-body" style="min-height:300px">
                        <h6 class="card-title">Addres</h6>
                        <textarea name="addres" class="form-control" required>{{ $Setting['addres'] }}</textarea>
                        <h6 class="card-title">Banner Text</h6>
                        <textarea name="banner_text" style="height:150px;" class="form-control" required>{{ $Setting['banner_text'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-title">Text1</h6>
                        <textarea name="text1" style="height:150px;" class="form-control" required>{{ $Setting['text1'] }}</textarea>
                        <h6 class="card-title">Text2</h6>
                        <textarea name="text2" style="height:150px;" class="form-control" required>{{ $Setting['text2'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body">
                        <h6 class="card-title">Text3</h6>
                        <textarea name="text3" style="height:150px;" class="form-control" required>{{ $Setting['text3'] }}</textarea>
                        <h6 class="card-title">Text4</h6>
                        <textarea name="text4" style="height:150px;" class="form-control" required>{{ $Setting['text4'] }}</textarea>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 text-center">
                <button class="btn btn-primary w-50">Saqlash</button>
            </div>
        </div>
    </form>


@endsection
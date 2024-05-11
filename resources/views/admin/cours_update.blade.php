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
    <div class="card">
        <div class="card-header">Kursni taxrirlash</div>
        <div class="card-body">
            <form action="{{ route('AdminCoursUpdates',$Cours['id']) }}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('put')
                <div class="row">
                    <div class="col-lg-4">
                        <label for="crm_user_id" class="mt-2">O'quv markazdagi kurs</label>
                        <select name="crm_user_id" class="form-select" required>
                            <option value="">Tanlang...</option>
                            @foreach($cours as $item)
                                <option value="{{ $item['id'] }}">{{ $item['cours_name'] }} ({{ $item['filial_name'] }})</option>
                            @endforeach
                            <option value="NULL">O'quv markaz uchun emas</option>
                        </select>
                        <label for="category_id" class="mt-2">Katigoriyani tanlang</label>
                        <select name="category_id" class="form-select" required>
                            <option value="">Tanlang...</option>
                            <option value="hangil">Hangil darslar</option>
                            <option value="imtihon">Ish imtihoni uchun</option>
                            <option value="markaz">O'quv markaz kurslari</option>
                            <option value="topik">Topik darslar</option>
                        </select>
                        <label for="techer_id" class="mt-2">O'qituvchini tanlang</label>
                        <select name="techer_id" class="form-select" required>
                            <option value="">Tanlang...</option>
                            @foreach($Techer as $item)
                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                            @endforeach
                        </select>
                        <label for="video" class="mt-2">Kurs uchun video(youtube token)</label>
                        <input type="text" value="{{ $Cours['video'] }}" name="video" required class="form-control">
                        <label for="image" class="mt-2">Kurs uchun rasm (.jpg .png .jpeg)</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <label for="cours_name" class="mt-2">Kursning nomi</label>
                        <input type="text" value="{{ $Cours['cours_name'] }}" name="cours_name" required class="form-control">
                        <label for="price1" class="mt-2">Kursning narxi</label>
                        <input type="number" value="{{ $Cours['price1'] }}" name="price1" required class="form-control">
                        <label for="price2" class="mt-2">Kursning narxi(Markaz talabalari uchun)</label>
                        <input type="number" value="{{ $Cours['price2'] }}" name="price2" required class="form-control">
                        <label for="davomiyligi" class="mt-2">Video kurslar umumiy vaqti(00:00:00)</label>
                        <input type="text" value="{{ $Cours['davomiyligi'] }}" name="davomiyligi" required class="form-control times">
                        <label for="azolik" class="mt-2">Kursning davomiyligi(kun)</label>
                        <input type="number" value="{{ $Cours['azolik'] }}" name="azolik" required class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <label for="min_text">Kurs haqida(Qisqacha)</label>
                        <textarea name="min_text" style="height:126px;" 
                        required class="form-control">{{ $Cours['min_text'] }}</textarea>
                        <label for="max_text">Kurs haqida(To'liq)</label>
                        <textarea name="max_text" style="height:126px;" 
                        required class="form-control">{{ $Cours['max_text'] }}</textarea>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Kursni yangilash</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
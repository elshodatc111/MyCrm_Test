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
        <div class="card-header">Yangi kurs</div>
        <div class="card-body">
            <form action="{{ route('AdminCoursCreate') }}" method="POST" enctype="multipart/form-data">
                @csrf 
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
                        <input type="text" name="video" required class="form-control">
                        <label for="image" class="mt-2">Kurs uchun rasm (.jpg .png .jpeg)</label>
                        <input type="file" name="image" required class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <label for="cours_name" class="mt-2">Kursning nomi</label>
                        <input type="text" name="cours_name" required class="form-control">
                        <label for="price1" class="mt-2">Kursning narxi</label>
                        <input type="number" name="price1" required class="form-control">
                        <label for="price2" class="mt-2">Kursning narxi(Markaz talabalari uchun)</label>
                        <input type="number" name="price2" required class="form-control">
                        <label for="davomiyligi" class="mt-2">Video kurslar umumiy vaqti(00:00:00)</label>
                        <input type="text" name="davomiyligi" required class="form-control times">
                        <label for="azolik" class="mt-2">Kursning davomiyligi(kun)</label>
                        <input type="number" name="azolik" required class="form-control">
                    </div>
                    <div class="col-lg-4">
                        <label for="min_text">Kurs haqida(Qisqacha)</label>
                        <textarea name="min_text" style="height:126px;" required class="form-control"></textarea>
                        <label for="max_text">Kurs haqida(To'liq)</label>
                        <textarea name="max_text" style="height:126px;" required class="form-control"></textarea>
                        <button type="submit" class="btn btn-primary w-100 mt-2">Kursni saqlash</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card mt-2 mb-5">
        <div class="card-header">Online kurslar</div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kursning nomi</th>
                        <th>Kurs narxi</th>
                        <th>Kurs narxi(Talabalar uchun)</th>
                        <th>Mavzular soni</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Cours as $item)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td style="text-align:left">
                            <a href="{{ route('adminShowCours',$item['id']) }}">{{ $item['cours_name'] }}</a>
                        </td>
                        <td>{{ $item['price1'] }}</td>
                        <td>{{ $item['price2'] }}</td>
                        <td>{{ $item['mavzu'] }}</td>
                        <td>
                            <a href="{{ route('AdminCoursUpdate',$item['id']) }}" class="btn btn-primary p-0 px-1"><i class="bi bi-pencil"></i></a>
                            <a href="{{ route('AdminCoursDelete',$item['id']) }}" class="btn btn-danger p-0 px-1"><i class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@extends('layouts.admin')
@section('title') Админ @parent @endsection
@section('content')
    <h2 class="float-center d-block mt-3 mb-3 mr-3 text-center">Панель администратора</h2>
    <a class="float-center d-block mt-2 mr-1 text-center text-dark text-decoration-none" href="{{route('news')}}">Главная новости</a>
    <a class="float-center d-block mt-2 mr-1 text-center text-dark text-decoration-none" href="{!! route('admin.parser')!!}">
        <h5>
            Парсить новости
        </h5>
    </a>
@endsection

@extends('layouts.app')

@section('title', 'О нас')

@section('content')
    <div class="text-center">
        <h1>О нас</h1>
        <p>Мы команда, работающая над созданием простого и удобного приложения для управления задачами.</p>
        <p>Наше приложение помогает командам быть организованными и продуктивными.</p>
    </div>
    <img src="{{ asset('https://pictra.co/files/img/photo/ucheba-kartinki/ucheba-kartinki-1.webp') }}" alt="Photo 1" style="float: right; width: 400px; height: auto; margin-left: 20px;">
@endsection

@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <div class="text-center">
        <h1>Добро пожаловать в To-Do App!</h1>
        <p>To-Do App для команд.</p>
        <p>
            <a class="btn btn-primary" href="{{ route('tasks.index') }}">Список задач</a>
            <a class="btn btn-secondary" href="{{ route('tasks.create') }}">Создать задачу</a>
            <a href="{{ route('login') }}">Вход</a>
            <a href="{{ route('register') }}">Регистрация</a>
        </p>
    </div>

    <h2>Информация о приложении</h2>
    <p>
        Это приложение позволяет командам эффективно управлять задачами, делиться списками дел и отслеживать прогресс. 
        Основные функции включают в себя создание, редактирование и удаление задач, а также возможность просмотра всех задач в одном месте.
    </p>
    <div style="display: flex; gap: 10px;">
    <img src="{{ asset('https://media.istockphoto.com/id/1177158970/ru/%D0%B2%D0%B5%D0%BA%D1%82%D0%BE%D1%80%D0%BD%D0%B0%D1%8F/%D0%B7%D0%B0%D0%BD%D1%8F%D1%82-%D0%B1%D0%B8%D0%B7%D0%BD%D0%B5%D1%81%D0%BC%D0%B5%D0%BD-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%B0%D1%8E%D1%89%D0%B8%D0%B9-%D0%BD%D0%B0-%D0%BA%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D0%B5-%D1%81-%D0%BA%D1%83%D1%87%D0%B5%D0%B9-%D0%B1%D1%83%D0%BC%D0%B0%D0%B3.jpg?s=612x612&w=0&k=20&c=ruuDqq-HKWwQixeqJ4KUN8RCD0yIJCGCGmoX6V0r5ns=') }}" alt="Photo 1" style="width: 400px; height: auto;">
    <img src="{{ asset('https://img.championat.com/s/732x488/news/big/v/k/6-priznakov-togo-chto-rabota-vredit-zdorovyu_16401767331765466578.jpg') }}" alt="Photo 2" style="width: 400px; height: auto;">
    <img src="{{ asset('https://euni.ru/wp-content/uploads/4-21.jpg') }}" alt="Photo 2" style="width: 400px; height: auto;">
</div>
@endsection

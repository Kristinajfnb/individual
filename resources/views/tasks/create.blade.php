@extends('layouts.app')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
    }
    h1 {
        text-align: center;
        color: #333;
        margin-top: 20px;
    }
    form {
        max-width: 500px;
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    form div {
        margin-bottom: 15px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #555;
    }
    input, textarea, select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 14px;
    }
    input:focus, textarea:focus, select:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        outline: none;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #28a745;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    button:hover {
        background-color: #218838;
    }
    ul {
        margin-top: 15px;
        padding: 10px;
        background: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
    }
</style>

<h1>Создать задачу</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Название задачи</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label for="description">Описание</label>
        <textarea id="description" name="description">{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="due_date">Дата выполнения</label>
        <input type="date" id="due_date" name="due_date" value="{{ old('due_date') }}" required>
    </div>

    <div>
        <label for="category_id">Категория</label>
        <select id="category_id" name="category_id" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit">Сохранить</button>
</form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection

<!DOCTYPE html>
<html>
<head>
    <title>Редактировать задачу</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Подключение CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1.1em;
            margin-bottom: 5px;
            color: #333;
        }

        input, textarea, select {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            width: 100%;
        }

        input[type="date"] {
            padding: 8px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 5px;
            cursor: pointer;
            align-self: flex-start;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 15px;
            margin-top: 20px;
            border-radius: 5px;
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Редактировать задачу</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Указываем метод PUT для обновления данных -->

            <div>
                <label for="title">Название задачи</label>
                <input type="text" id="title" name="title" value="{{ old('title', $task->title) }}" required>
            </div>

            <div>
                <label for="description">Описание</label>
                <textarea id="description" name="description">{{ old('description', $task->description) }}</textarea>
            </div>

            <div>
                <label for="due_date">Дата выполнения</label>
                <input type="date" id="due_date" name="due_date" value="{{ old('due_date', $task->due_date) }}" required>
            </div>

            <div>
                <label for="category_id">Категория</label>
                <select id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $task->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Обновить задачу</button>
        </form>

        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</body>
</html>

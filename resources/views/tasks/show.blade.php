<!DOCTYPE html>
<html>
<head>
    <title>{{ $task->title }}</title>
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

        p {
            font-size: 1.1em;
            margin-bottom: 15px;
            line-height: 1.5;
        }

        strong {
            color: #333;
        }

        ul {
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 5px;
        }

        .btn {
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            color: #fff;
            background-color: #007bff;
            text-align: center;
        }

        .btn:hover {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $task->title }}</h1>
        <p><strong>Описание:</strong> {{ $task->description }}</p>
        <p><strong>Категория:</strong> {{ $task->category->name ?? 'Нет категории' }}</p>
        <p><strong>Теги:</strong>
            @if($task->tags->isEmpty())
                Нет тегов
            @else
                <ul>
                    @foreach($task->tags as $tag)
                        <li>{{ $tag->name }}</li>
                    @endforeach
                </ul>
            @endif
        </p>
        <a href="{{ route('tasks.index') }}" class="btn">Назад к списку задач</a>
    </div>
</body>
</html>

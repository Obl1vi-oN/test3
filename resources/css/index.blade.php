<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0 200px;
        }
        p {
            margin: 0;
        }
        a {
            text-decoration: none;
            color: black;
        }
        .content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap: 40px;
        }
        .item {
            position: relative;
            padding: 20px;
            display: flex;
            gap: 20px;
            flex-direction: column;
            border: 1px solid black;
            border-radius: 10px;
            cursor: pointer;
        }
        .item .time {
            font-size: 12px;
            position: absolute;
            top: 5px;
            right: 5px;
            margin: 0;
        }
        h1 {
            margin: 40px 0 20px;
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: start;
        }
        .input {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        button {
            cursor: pointer;
            background-color: aqua;
            color: #ffffff;
            padding: 10px;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<h1>Посты пользователей</h1>
<div class="content">
    @foreach($posts as $post)
        <a href="/posts/{{ $post->id }}" class="item">
            <p class="time">{{$post->created_at}}</p>
            <p>{{$post->title}}</p>
            <p>Автор: {{$post->author}}</p>
        </a>
    @endforeach
</div>
<div>
    <h1>Добавить пост</h1>
    <form action="/" method="POST" class="form">
        @csrf
        <div class="input">
            <label for="author">Автор</label>
            <input type="text" name="author" required>
        </div>
        <div class="input">
            <label for="title">Название</label>
            <input type="text" name="title" required>
        </div>
        <div class="input">
            <label for="text">Текст</label>
            <textarea name="text" rows="4" required></textarea>
        </div>
        <button type="submit">Отправить</button>

    </form>
</div>

</body>
</html>

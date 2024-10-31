<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <style>
        body {
            margin: 0 200px;
            font-family: Arial, sans-serif;
        }
        p {
            margin: 0;
            padding: 0;
        }
        .content {
            margin-top: 40px;
        }
        .card-content {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
            gap: 40px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid black;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        form button {
            width: 100%;
            cursor: pointer;
            background-color: aquamarine;
            color: white;
            padding: 10px 30px;
            border: none;
            border-radius: 10px;
        }
        .input {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .input input {
            padding: 10px;
            border-radius: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div class="content">
    <h1>Контакты</h1>
    <div class="card-content">
        @foreach($contacts as $contact)
            <div class="card">
                <p>{{$contact->lastname}}</p>
                <p>{{$contact->name}}</p>
                <p>{{$contact->surname}}</p>
                <a href="/contact/{{ $contact->id }}">Подробнее</a>
            </div>
        @endforeach
    </div>
</div>

<div class="content">
    <h1>Добавить контакт</h1>
    <form action="/" method="POST">
        @csrf
        <div class="input">
            <label for="lastname">Фамилия</label>
            <input type="text" name="lastname" placeholder="Введите Фамилию" required>
        </div>
        <div class="input">
            <label for="name">Имя</label>
            <input type="text" name="name" placeholder="Введите Имя" required>
        </div>
        <div class="input">
            <label for="surname">Отчество</label>
            <input type="text" name="surname" placeholder="Введите Отчество" required>
        </div>

        <div class="input">
            <label for="phone">Номер телефона</label>
            <input type="tel" name="phone" placeholder="Введите номер телефона" required>
        </div>
        <button type="submit">Отправить</button>

    </form>
</div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$contacts->name}}</title>
    <style>
        body {
            margin: 0 200px;
            font-family: Arial, sans-serif;
        }
        p {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div>
    <div class="card">
        <p>{{$contacts->lastname}}</p>
        <p>{{$contacts->name}}</p>
        <p>{{$contacts->surname}}</p>
        <p>{{$contacts->phone}}</p>
    </div>
    <h2>Добавить номер</h2>

    <form action="/phone" method="POST">
        <input type="text" hidden name="contact_id">
        <input type="tel" name="phone">
        <button type="submit">Добавить</button>
    </form>
</div>

</body>
</html>

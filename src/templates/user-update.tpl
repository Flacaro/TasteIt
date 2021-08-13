<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/users/{$id}" method="POST">

        <input type="text" value="{$name}" name="name">
        <input type="text" value="{$surname}" name="surname">
        <input type="text" value="{$email}" name="email">
        <input type="text" value="{$password}" name="password">
        <button type="submit">Aggiorna </button>

    </form>
</body>
</html>
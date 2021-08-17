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
{* Action rappresenta l'url alla quale viene fatta la richiesta quando si chiama un metodo   *}
<form action="/orders/{$id}" method="POST">

    <input type="text" value="{$state}" name="state">
    <input type="text" value="{$arrivalTime}" name="arrivalTime">
    <button type="submit">Aggiorna</button>
</form>
</body>
</html>
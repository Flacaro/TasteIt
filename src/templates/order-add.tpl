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

<form action="/orders/{$id}" method="GET">

    <input type="number" value="{$total}" name="total">
    <input type="time" value="{$arrivalTime}" name="arrivalTime">
    <input type="number" value="{$payment}" name="payment">
    <input type="number" value="{$coupon}" name="coupon">
    <input type="number" value="{$user}" name="user">
    <button type="submit">Crea</button>
</form>
</body>
</html>
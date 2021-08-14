<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<ul>
    <h1> {$yourName}</h1>
    {foreach $orders as $order}

        <li>
            <form action="/orders/{$order->getOrderId()}" method="GET">
            </form>
            <span>
            {$order->getOrderId()}
        </span>
            {$order->getCreationDate()}
            {$order->getTotal()}
            {$order->getArrivalTime()}
        </li>
    {/foreach}
</ul>
</body>
</html>
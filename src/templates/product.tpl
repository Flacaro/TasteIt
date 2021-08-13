<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>

    {foreach $products as $product}

        <li>
            <form action="/products/{$product->getProductId()}" method="GET">
                <button type="submit">X</button>
            </form>
            <span>
                {$product->getProductId()}
            </span>
            {$product->getName()}
            {$product->getDescription()}
            {$product->getPrice()}
        </li>

    {/foreach}
</ul>
</body>
</html>

{* qua si vedranno le review? *}
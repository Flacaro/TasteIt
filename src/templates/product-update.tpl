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
<h1>ID: {$id}</h1>
    {* Action rappresenta l'url alla quale viene fatta la richiesta quando si chiama un metodo   *}
    <form action="/products/{$id}" method="POST">

        <input type="text" value="{$name}" name="name">
        <input type="text" value="{$description}" name="description">
        <input type="text" value="{$price}" name="price">
        <input type="text" value="{$categoryId}" name="categoryId" hidden>
        <button type="submit">Aggiorna</button>
    </form>
</body>
</html>
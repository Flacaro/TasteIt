<?php

use Pecee\Http\Request;
use Pecee\SimpleRouter\Exceptions\NotFoundHttpException;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::redirect("/", "/todos");
SimpleRouter::get("/todos", [TodoController::class, "index"]);
SimpleRouter::post("/todos", [TodoController::class, "store"]);
SimpleRouter::get("/todos/{todo}", [TodoController::class, "get"]);







SimpleRouter::error(function(Request $request, \Exception $exception) {

    if($exception instanceof NotFoundHttpException && $exception->getCode() === 404) {
        echo "404 not found";
    }

});
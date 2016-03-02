<?php
/** @var \Dingo\Api\Routing\Router $api */
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    /** @var \Dingo\Api\Routing\Router $api */
    $api->resource('books', 'App\Http\Controllers\Api\V1\BooksController');
    $api->resource('authors', 'App\Http\Controllers\Api\V1\AuthorsController');
});
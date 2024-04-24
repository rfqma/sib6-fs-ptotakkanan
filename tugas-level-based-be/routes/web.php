<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return [
        'Name' => 'Tugas Level Based Learning by MSIB 6 Full Stack Web Developer PT OTAK KANAN',
        'Laravel' => app()->version(),
        'data' => [
            'author' => [
                'name' => 'Rifqi Maulana',
                'email' => 'rifqimaulanax@gmail.com'
            ],
            'endpoints' => [
                [
                    'name' => 'Dummy Data',
                    'description' => 'data dummy for api fetching',
                    'endpoint' => '/dummy-data',
                    'url' => 'http://localhost:8000/dummies',
                ],
                [
                    'name' => 'Hello World!',
                    'description' => 'Hello World!!',
                    'endpoint' => '/hello-world',
                    'url' => 'http://localhost:8000/hello-world',
                ]
            ]
        ],
    ];
});

Route::get('/hello-world', function () {
    return [
        'message' => 'Hello World!!'
    ];
});

require __DIR__ . '/auth.php';
require __DIR__ . '/dummy.php';

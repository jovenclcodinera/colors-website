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
    $services = [
        [
            'title' => 'Custom Colorways',
            'description' => 'AI Powered Technology'
        ],
        [
            'title' => 'Are you Ready?',
            'description' => 'Take the leap'
        ],
        [
            'title' => 'Full Gradients',
            'description' => '100 Combinations'
        ],
        [
            'title' => 'Infinite Choices',
            'description' => "1000's of Colors"
        ],
    ];
    return view('app', [
        'services' => $services
    ]);
});

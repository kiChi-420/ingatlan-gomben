<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $username = 'János';
    $navbar = `
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Otthon</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Bejelentkezés</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/user">Az Ön Felhasználói fiókja</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/urlap">Rendelés</a>
                </li>
                <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
                </li> -->
                <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a> 
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li> -->
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    `;
    return view('welcome', [
        'name' => $username,
        'navbar' => $navbar
    ]);
});
Route::get('/user', function() {
    return view('user');
});
Route::get('/login', function() {
    return view('login');
});
Route::get('/urlap', function() {
    return view('urlap');
});

Route::get('/tomb', function(){
    return ['foo' => 'bar'];
});

Route::get('/pass-array', function(){
    $tasks = [
        'Menj el a boltba',
        'Menj el a piacra',
        'Menj el munkába',
        'Hozz haza két karton tojást'
    ];
    $foobar = 'foobar';
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
       ]);
});

Route::get('/request-test', function () {
    return view('request-inputs', [
        'title' => request('title'),
    ]);
});
   
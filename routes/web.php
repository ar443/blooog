<?php

use App\Models\Post;
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
    $posts = Post::all();

    // ddd($posts);
    return view('hello', [
        'posts' => $posts
    ]);
});
route::get('hello/{hello2}', function ($slug) {
    $post = Post::find($slug);
    return view('hello2', [
        'hello2' => $post
    ]);
})->where('hello2', '[A-z_-]+');

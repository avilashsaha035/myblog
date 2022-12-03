<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

// $document = YamlFrontMatter::parseFile(
// 	resource_path('posts/my-fourth-post.html')
// );
// ddd($document);


    return view('posts', [
    	'posts' => post::all()
    ]);
});


Route::get('posts/{post}', function ($slug) {
	//find a post by its slug and pass it to a view called "post"
	return view('post',[
		'post' => post::findOrFail($slug)
	]);

}); 
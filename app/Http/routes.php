<?php
use App\Country;
use App\Photo;
use App\Post;
use App\Tag;
use App\User;


// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/about', function () {
// //     return "Hi about page";
// // });

// // Route::get('/contact', function () {
// //     return "hi I am contact";
// // });

// // Route::get('/post/{id}/{name}', function ($id, $name) {
// //     return "This is post number" . $id . " " . $name;
// // });

// // Route::get('admin/posts/example', array('as'=>'admin.home' ,function(){
// // 	$url = route('admin.home');

// // 	return "this url is ". $url;
// // }));


// // Route::get('/post/{id}', 'PostController@index');

// Route::resource('posts', 'PostController');


// Route::get('/contact', 'PostController@contact');

// Route::get('/post/{id}/{name}/{password}', 'PostController@show_post');


/*
|--------------------------------------------------------------------------
| DATABASE Raw SQL Queries
|--------------------------------------------------------------------------
*/


// Route::get('/insert', function(){

// 	DB::insert('insert into posts(title, content) values(?, ?)', ['PHP with Laravel is best', 'Laravel is the best thing that has happened to PHP, PERIOD']);

// });



// Route::get('/read', function(){


// 	$results = DB::select('select * from posts where id = ?', [1]);


// 	return var_dump($results);

// 	//return $results; 

// 	// foreach ($results as $post) {
		
// 	// 	return $post->title;

// 	// }

// });

// Route::get('/update', function(){

// 	$updated = DB::update('update posts set title = "Update title" where id = ?', [1]);

// 	return $updated;


// });



// Route::get('/delete', function(){

// 	$deleted = DB::delete('delete from posts where id = ?', [1]);

// 	return $deleted;

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
*/
// Route::get('/read', function(){

// 	$posts = Post::all();

// 	foreach ($posts as $post) {
// 		return $post->title;
// 	}


// });



// Route::get('/find', function(){

// 	$post = Post::find(2);

// 	return $post->title;

// });


// Route::get('/findwhere', function(){

// 	$posts = Post::where('id', 3)->orderBy('id', 'desc')->take(1)->get();

// 	return $posts;


// });

// Route::get('findmore', function(){

// 	// $posts = Post::findOrFail(2);

// 	// return $posts;

// 	$posts = Post::where('users_count', '<', 50)->findOrFail();

// });



// Route::get('/basicinsert', function(){

// 	$post = new Post;

// 	$post->title = 'New Eloquent title insert';
// 	$post->content = 'Wow eloquent is really cool, look at this content';

// 	$post->save();

// });



// Route::get('/basicinsert2', function(){

// 	$post = Post::find(2);

// 	$post->title = 'New Eloquent title insert2';
// 	$post->content = 'Wow eloquent is really cool, look at this content2';

// 	$post->save();

// });




// Route::get('/create', function(){

// 	Post::create(['title'=>'the create method', 'content'=>'Wow I am learning alot!']);

// });


// Route::get('/update', function(){

// 	Post::where('id', 2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=>'I love \'\' myself']);

// });


// Route::get('/delete', function(){

// 	$post = Post::find(2);

// 	$post->delete();

// });

// Route::get('/delete3', function(){

// 	// Post::destroy(3);
// 	Post::destroy([4,5]);

// 	// Post::where('is_admin', 0)->delete();

// });

// Route::get('/softdelete', function(){

// 	Post::find(2)->delete();


// });

// Route::get('/readsoftdelete', function(){

	// $post = Post::find(1);

	// return $post;



	// $post = Post::withTrashed()->where('is_admin', 0)->get();

	// return $post; 


	// $post = Post::onlyTrashed()->where('is_admin', 0)->get();

	// return $post; 




// });





// Route::get('/restore', function(){

// Post::withTrashed()->where('is_admin', 0)->restore();

// });



// Route::get('/forcedelete', function(){

// Post::onlyTrashed()->where('is_admin', 0)->forceDelete();

// });




/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/
//ONEOONE Relationship

// Route::get('/user/{id}/post', function($id){

// 	return User::find($id)->post;	

// });



// Route::get('/post/{id}/user', function($id){

// 	return Post::find($id)->user;	

// });


//ONETOMANY Relationship
// Route::get('/posts', function(){

// 	$user = User::find(1);
// 	foreach($user->posts as $post) {

// 		echo $post->title . "<br>";
//     }

// });


// Route::get('/user/{id}/action', function($id){

// 	$user = User::find($id)->roles()->orderBy('id', 'desc')->get();

// 	return $user;

// 	// foreach ($user->actions as $action) {
		
// 	// 	return $action->name;
// 	// }

// });

//Accessing the intermediate table / pivot

// Route::get('user/pivot', function(){

// 	$user = User::find(1);

// 	foreach ($user->actions as $action) {
		
// 		return $action->pivot->created_at;
// 	}

// });


// Route::get('/user/country', function(){

// 	$country = Country::find(4);

// 	foreach ($country->posts as $post) {
// 		return $post->title;
// 	}

// });


//Polymorphic Relations

// Route::get('post/{id}/photos', function($id){

// 	$post = Post::find($id);

// 		foreach($post->photos as $photo) {

// 			echo $photo->path . "<br>";
// 		}

// });


// Route::get('photo/{id}/post', function($id){

// 	$photo = Photo::findOrFail($id);

// 	  return $photo->imageable;

// });


// Route::get('/post/tag', function(){

// 	$post = Post::find(1);

// 	foreach ($post->tags as $tag) {
// 		echo $tag->name;
// 	}

// });


// Route::get('/tag/post', function(){

// 	$tag = Tag::find(2);

// 	foreach ($tag->posts as $post) {
// 		echo $post->title;
// 	}

// });

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {

});
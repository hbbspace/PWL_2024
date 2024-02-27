<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});


// Basic Routing
Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return view('about/hbbspace');
});


// Route parameters
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
}); 

Route::get('/pos/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

Route::get('/articles/{id}', function 
($id) { 
return "Halaman Artikel  dengan ID = " . $id; 
});


// Optional Parameters
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name; 
}); */

// Route Name
// Route::get('/user/profile', function () { 
// })->name('profile'); 
// Route::get( 
//     '/user/profile', 
//     [UserProfileController::class, 'show'] 
// )->name('profile'); 
// // Generating URLs... 
// $url = route('profile');

// // Generating Redirects... 
//     return redirect()->route('profile');

// Route Group dan Route Prefixes
/*Route::middleware(['first', 'second'])->group(function () { 
    Route::get('/', function () { 
        // Uses first & second middleware... 
    }); 
 
Route::get('/user/profile', function () { 
        // Uses first & second middleware... 
    }); 
}); 
 
Route::domain('{account}.example.com')->group(function () { 
    Route::get('user/{id}', function ($account, $id) { 
        // 
    }); 
}); 
 
Route::middleware('auth')->group(function () { 
 Route::get('/user', [UserController::class, 'index']); 
 Route::get('/post', [PostController::class, 'index']); 
 Route::get('/event', [EventController::class, 'index']); 
  
});*/

/*Route::prefix('admin')->group(function () { 
    Route::get('/user', [UserController::class, 'index']); 
    Route::get('/post', [PostController::class, 'index']); 
    Route::get('/event', [EventController::class, 'index']); 
    
});*/


// Redirect Routes
// Route::redirect('/here', '/there');


// View Routes
// Route::view('/welcome', 'welcome'); 
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);


// Membuat Controller
// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class,'index']);

// Route::get('/about', [PageController::class,'about']);

// Route::get('/articles/{id}', [PageController::class,'articles']);


Route::get('/', [HomeController::class,'index']);

Route::get('/about', [AboutController::class,'index']);

Route::get('/articles/{id}', [ArticleController::class,'index']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only([ 
'index', 'show' 
]); 

Route::resource('photos', PhotoController::class)->except([ 
'create', 'store', 'update', 'destroy' 
]);
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AudioController;



// Route::post('/login', [UserController::class,'login'])->name('auth.login'); 
// Route::get('/login_url', [UserController::class,'showlogin'])->name('login'); 
Route::post('/login', [UserController::class,'login'])->name('auth.login'); 
Route::get('/loginadmin_url', [UserController::class,'showloginadmin'])->name('loginadmin'); 
Route::post('/register', [UserController::class,'store'])->name('auth.register'); 
Route::get('/register_url', [UserController::class,'register'])->name('register'); 

Route::get('/app', [UserController::class,'app'])->name('app'); 
Route::get('/admin123', [UserController::class,'admin123'])->name('admin123'); 
Route::post('/search', [HomeController::class,'search'])->name('search');
Route::post('/search1', [HomeController::class,'search1'])->name('search1');
Route::get('/list-audio', [AudioController::class,'list_audio'])->name('management'); 
Route::get('/song',[AudioController::class, 'index'])->name('song');
Route::get('/list-audio/xoa={id}', [AudioController::class, 'destroy'])->name('xoa');
Route::get('/update/{id}', [AudioController::class, 'edit'])->name('update');
Route::get('/showupdate', [AudioController::class, 'showupdate'])->name('showupdate');
Route::post('/list-audio/update', [AudioController::class, 'update'])->name('postUpdate');
Route::get('/add', [AudioController::class,'add'])->name('audio.add'); 
Route::post('/audio-add-success', [AudioController::class,'store'])->name('audio.store'); 
Route::get('/audio-single', [AudioController::class,'audio-single'])->name('audio-single'); 
Route::get('/audio-show/{id}', [AudioController::class, 'show'])->name('audio.show');
Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/shoping', function () {
    return view('shoping');
});
Route::get('/view', function () {
    return view('view');
});

Route::get('/student_list', function () {
    return view('student_list');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/master', function () {
    return view('master');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/input-user', function () {
    return view('input-user');
});
Route::get('/student_list', function () {
    return view('student_list');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/albums', [AudioController::class,'albums'])->name('albums');
Route::get('/add', function () {
    return view('add');
});
Route::get('/news', function () {
    return view('news');});
    
    Route::get('/calculator', function () {
        return view('calculator');});
 Route::get('/admin', function () {
        return view('admin');});
        Route::get('/update', function () {
            return view('update');});
        Route::get('/search1', function () {
            return view('search');});
      Route::get('/search1', function () {
            return view('search');});
            Route::get('/logout', [UserController::class, 'logout'])->name('logout');
            Route::get('/admin', [UserController::class, 'admin'])->name('admin');
            Route::get('/home', [UserController::class, 'home'])->name('home');
            Route::get('/forgot-password', function () {
                return view('auth.forgot-password');
            })->middleware('guest')->name('password.request');
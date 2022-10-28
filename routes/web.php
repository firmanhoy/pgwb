<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
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


Route::middleware('auth')->group(function(){
    Route::resource('/admin/contact', AdminContactController::class);
    Route::resource('/admin/project', AdminProjectController::class);
    Route::get('/admin', [AdminController::class, 'index']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::resource('/admin/dashboard', AdminDashboardController::class);
    Route::get('admin/student/{id_siswa}/create',[AdminProjectController::class,'createproject'])->name('project.created');
    Route::resource('/admin/student', AdminStudentController::class);
    Route::get('admin/student/{id_siswa}/hapus',[AdminStudentController::class,'hapus'])->name('student.hapus');
    Route::get('admin/project/{id_siswa}/hapus',[AdminProjectController::class,'hapus'])->name('project.hapus');

});
Route::middleware('guest')->group(function(){
    Route::get('/register', [LoginController::class, 'daftar'])->middleware('guest');
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

// Route::get('/logout')->middleware('auth');
Route::get('/logout', [LoginController::class, 'logouth'])->middleware('auth');









// Route::get('/admin', function () {
//     return view('admin.admin',[
//         "title" => "Admin Page"
//     ]);
// });
Route::get('/', function () {
    return view('profile');
});
Route::get('/denied', function () {
    return view('denied');
});

// Route::get('/profile', function () {
//     return view('profile',[
//         "title" => "Profile"
//     ]);
// });

// Route::get('/about', function () {
//     return view('about',[
//         "title" => "About"]);
// });

// Route::get('/projects', function () {
//     return view('project',[
//         "title" => "Project"
//     ]);
// });
// Route::get('/contact', function () {
//     return view('contact',[ 
//         "title" => "Contact"
//     ]);
// });

// Route::get('/admin/student', function () {
//     return view('admin.master-student');
// });
// Route::get('/admin/contact', function () {
//     return view('admin.master-contact');
// });
// Route::get('/admin/project', function () {
//     return view('admin.master-project');
// });
// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// });



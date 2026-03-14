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
    return view('welcome');
});


Route::get('/', function () {
return view('home');
})->name('home');


Route::get('/about', function () {
$name = 'Johann Sebastian P. Nacua'; 
$course = 'Bachelor of Science in Information Technology';
$university = 'Central Mindanao University'; 
return view('about', [
'name' => $name,
'course' => $course,
'university' => $university
]);
})->name('about');


Route::get('/projects', function () {
$projects = [
['title' => 'Project 1', 'description' => 'My first web project'],
['title' => 'Project 2', 'description' => 'E-commerce website'],
['title' => 'Project 3', 'description' => 'Mobile app design'],
];
return view('projects', ['projects' => $projects]);
})->name('projects');


Route::get('/contact', function () {
$email = 's.nacua.johannsebastian@cmu.edu.ph'; 
$phone = '+63 965 225 8693'; 

return view('contact', [
'email' => $email,
'phone' => $phone
]);
})->name('contact');

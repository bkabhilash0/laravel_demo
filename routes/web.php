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
    $myData = [["name" => "Abhilash", "age" => 22], ["name" => "Nimsha", "age" => 22]];
    return view('welcome', ["data" => $myData])->with("sample", ["name" => "Sample Name"]);
})->name("home");

Route::get("/about-us", function () {
    return view("about");
})->name("about");

Route::get("/contact", function () {
    return view("reach.contact");
})->name("contact");

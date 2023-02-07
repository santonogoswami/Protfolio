<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebsettingController;
use App\Http\Controllers\backend\SocialController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\AboutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Web Setting crud routes//
Route::get('Details/webSetting/index', [WebsettingController::class,'index'])->name('Details.webSetting.index');
Route::get('Details/webSetting/create', [websettingController::class,'create'])->name('Details/webSetting.create');
Route::post('Details/webSetting/store', [websettingController::class,'store'])->name('Details.webSetting.store');
Route::get('Details/webSetting/edit/{id}', [websettingController::class,'edit'])->name('Details.webSetting.edit');
Route::POST('Details/webSetting/update/{id}', [websettingController::class,'update'])->name('Details.webSetting.update');
Route::get('Details/webSetting/delete/{id}', [websettingController::class,'destroy'])->name('Details.webSetting.delete');


//Social crud routes//
Route::get('Details/social/index', [SocialController::class,'index'])->name('Details.social.index');
Route::get('Details/social/create', [SocialController::class,'create'])->name('Details.social.create');
Route::post('Details/social/store', [SocialController::class,'store'])->name('Details.social.store');
Route::get('Details/social/edit/{id}', [SocialController::class,'edit'])->name('Details.social.edit');
Route::post('Details/social/update/{id}', [SocialController::class,'update'])->name('Details.social.update');
Route::get('Details/social/delete/{id}', [SocialController::class,'destroy'])->name('Details.social.delete');

//Skill Route__//
Route::get('Details/skill/index', [SkillController::class,'index'])->name('Details.skill.index');
Route::get('Details/skill/create', [SkillController::class,'create'])->name('Details.skill.create');
Route::post('Details/skill/store', [SkillController::class,'store'])->name('Details.skill.store');
Route::get('Details/skill/edit/{id}', [SkillController::class,'edit'])->name('Details.skill.edit');
Route::post('Details/skill/update/{id}', [SkillController::class,'update'])->name('Details.skill.update');
Route::get('Details/skill/delete/{id}', [SkillController::class,'destroy'])->name('Details.skill.delete');

//About Route__//
Route::get('Details/About/index', [AboutController::class,'index'])->name('Details.About.index');
Route::get('Details/About/create', [AboutController::class,'create'])->name('Details.About.create');
Route::post('Details/About/store', [AboutController::class,'store'])->name('Details.About.store');
Route::get('Details/About/edit/{id}', [AboutController::class,'edit'])->name('Details.About.edit');
Route::post('Details/About/update/{id}', [AboutController::class,'update'])->name('Details.About.update');
Route::get('Details/About/delete/{id}', [AboutController::class,'destroy'])->name('Details.About.delete');

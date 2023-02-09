<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\WebsettingController;
use App\Http\Controllers\backend\SocialController;
use App\Http\Controllers\backend\SkillController;
use App\Http\Controllers\backend\AboutController;
use App\Http\Controllers\backend\EducationController;
use App\Http\Controllers\backend\ExprienceController;
use App\Http\Controllers\backend\PortfolioController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\TestominialController;
use App\Http\Controllers\backend\ContactController;


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


//Education Route__//
Route::get('Details/Education/index', [EducationController::class,'index'])->name('Details.Education.index');
Route::get('Details/Education/create', [EducationController::class,'create'])->name('Details.Education.create');
Route::post('Details/Education/store', [EducationController::class,'store'])->name('Details.Education.store');
Route::get('Details/Education/edit/{id}', [EducationController::class,'edit'])->name('Details.Education.edit');
Route::post('Details/Education/update/{id}', [EducationController::class,'update'])->name('Details.Education.update');
Route::get('Details/Education/delete/{id}', [EducationController::class,'destroy'])->name('Details.Education.delete');


//__ExprienceRoute__//
Route::get('Details/Exprience/index', [ExprienceController::class,'index'])->name('Details.Exprience.index');
Route::get('Details/Exprience/create', [ExprienceController::class,'create'])->name('Details.Exprience.create');
Route::post('Details/Exprience/store', [ExprienceController::class,'store'])->name('Details.Exprience.store');
Route::get('Details/Exprience/edit/{id}', [ExprienceController::class,'edit'])->name('Details.Exprience.edit');
Route::post('Details/Exprience/update/{id}', [ExprienceController::class,'update'])->name('Details.Exprience.update');
Route::get('Details/Exprience/delate/{id}', [ExprienceController::class,'destroy'])->name('Details.Exprience.delete');

//__Portfolio Route__//
Route::get('Details/Portfolio/index', [PortfolioController::class,'index'])->name('Details.Portfolio.index');
Route::get('Details/Portfolio/create', [PortfolioController::class,'create'])->name('Details.Portfolio.create');
Route::post('Details/Portfolio/store', [PortfolioController::class,'store'])->name('Details.Portfolio.store');
Route::get('Details/Portfolio/edit/{id}', [PortfolioController::class,'edit'])->name('Details.Portfolio.edit');
Route::post('Details/Portfolio/update/{id}', [PortfolioController::class,'update'])->name('Details.Portfolio.update');
Route::get('Details/Portfolio/delete/{id}', [PortfolioController::class,'destroy'])->name('Details.Portfolio.delete');

//__Service Route__//
Route::get('Details/Service/index', [ServiceController::class,'index'])->name('Details.Service.index');
Route::get('Details/Service/create', [ServiceController::class,'create'])->name('Details.Service.create');
Route::post('Details/Service/store', [ServiceController::class,'store'])->name('Details.Service.store');
Route::get('Details/Service/edit/{id}', [ServiceController::class,'edit'])->name('Details.Service.edit');
Route::post('Details/Service/update/{id}', [ServiceController::class,'update'])->name('Details.Service.update');
Route::get('Details/Service/delete/{id}', [ServiceController::class,'destroy'])->name('Details.Service.delete');

//__Testominial Route__//
Route::get('Details/Testominial/index', [TestominialController::class,'index'])->name('Details.Testominial.index');
Route::get('Details/Testominial/create', [TestominialController::class,'create'])->name('Details.Testominial.create');
Route::post('Details/Testominial/store', [TestominialController::class,'store'])->name('Details.Testominial.store');
Route::get('Details/Testominial/edit/{id}', [TestominialController::class,'edit'])->name('Details.Testominial.edit');
Route::post('Details/Testominial/update/{id}', [TestominialController::class,'update'])->name('Details.Testominial.update');
Route::get('Details/Testominial/delete/{id}', [TestominialController::class,'destroy'])->name('Details.Testominial.delete');

//__Testominial Route__//
Route::get('Details/Contact/index', [ContactController::class,'index'])->name('Details.Contact.index');
Route::get('Details/Contact/create', [ContactController::class,'create'])->name('Details.Contact.create');
Route::post('Details/Contact/store', [ContactController::class,'store'])->name('Details.Contact.store');
Route::get('Details/Contact/edit/{id}', [ContactController::class,'edit'])->name('Details.Contact.edit');
Route::post('Details/Contact/update/{id}', [ContactController::class,'update'])->name('Details.Contact.update');
Route::get('Details/Contact/delete/{id}', [ContactController::class,'destroy'])->name('Details.Contact.delete');

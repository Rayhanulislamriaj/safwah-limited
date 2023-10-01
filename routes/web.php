<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FooterController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('concern', [HomeController::class, 'concern'])->name('concern');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');

//Sent Message
Route::post('contact/post', [HomeController::class, 'contact_post'])->name('contact.post');



//Admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'admin_dashboard'])->name('admin.dashboard');

    Route::get('admin/home', [DashboardController::class, 'admin_home'])->name('admin.home');
    Route::post('admin/home/post', [DashboardController::class, 'admin_home_post'])->name('admin.home.post');

    Route::get('admin/about', [DashboardController::class, 'admin_about'])->name('admin.about');
    Route::post('admin/about/post', [DashboardController::class, 'admin_about_post'])->name('admin.about.post');

    //Goal page
    Route::get('admin/service', [DashboardController::class, 'admin_service'])->name('admin.service');
    Route::post('admin/service/post', [DashboardController::class, 'admin_service_post'])->name('admin.service.post');
    Route::get('admin/service/edit/{id}', [DashboardController::class, 'admin_service_edit'])->name('admin.service.edit');
    Route::post('admin/service/update/{id}', [DashboardController::class, 'admin_service_update'])->name('admin.service.update');


    Route::get('admin/concern', [DashboardController::class, 'admin_concern'])->name('admin.concern');
    Route::post('admin/concern/post', [DashboardController::class, 'admin_concern_post'])->name('admin.concern.post');
    Route::get('admin/concern/edit/{id}', [DashboardController::class, 'admin_concern_edit'])->name('admin.concern.edit');
    Route::post('admin/concern/update/{id}', [DashboardController::class, 'admin_concern_update'])->name('admin.concern.update');
    Route::get('admin/concern/delete/{id}', [DashboardController::class, 'admin_concern_delete'])->name('admin.concern.delete');


    Route::get('admin/contact', [DashboardController::class, 'admin_contact'])->name('admin.contact');


    Route::get('admin/footer', [FooterController::class, 'admin_footer'])->name('admin.footer');
    Route::post('admin/footer/post', [FooterController::class, 'admin_footer_post'])->name('admin.footer.post');

    Route::get('admin/profile', [ProfileController::class, 'admin_profile'])->name('admin.profile');
    Route::post('admin/profile/update/', [ProfileController::class, 'admin_profile_update'])->name('admin.profile.update');


    Route::get('admin/team', [TeamController::class, 'admin_team'])->name('admin.team');
    Route::post('admin/team/post', [TeamController::class, 'admin_team_post'])->name('admin.team.post');
    Route::get('admin/team/edit/{id}', [TeamController::class, 'admin_team_edit'])->name('admin.team.edit');
    Route::post('admin/team/update/{id}', [TeamController::class, 'admin_team_update'])->name('admin.team.update');
    Route::get('admin/team/delete/{id}', [TeamController::class, 'admin_team_delete'])->name('admin.team.delete');

});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login/admin', [AuthController::class, 'login_admin'])->name('login.admin');
Route::get('forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::post('admin/forgot', [AuthController::class, 'admin_forgot'])->name('admin.forgot');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
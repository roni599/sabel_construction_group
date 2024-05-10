<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\ProjectViewController;

Route::get('/projects', [ProjectViewController::class, 'index'])->name('projects.index');

Route::get('/create', [ProjectImageController::class, 'showForm'])->name('project.create');
Route::post('/store', [ProjectImageController::class, 'store'])->name('project.store');



Route::get('/details/{id}', [ProjectViewController::class, 'view_project'])->name('project.details');


Route::get('/', [ProjectViewController::class, 'projects'])->name('project.home');
Route::get('/home', [ProjectViewController::class, 'projects'])->name('project.new');


Route::get('/projects/completed-projects', [ProjectViewController::class, 'completed_projects'])->name('project.completed');
Route::get('/projects/ongoing-projects', [ProjectViewController::class, 'ongoing_projects'])->name('project.ongoing');
Route::get('/projects/projectmap', [ProjectViewController::class, 'project_map'])->name('project.projectmap');
Route::get('/projects/projectmap_item', [ProjectViewController::class, 'project_map_item'])->name('project.projectmap_item');
Route::get('/details-view/{dist}', [ProjectViewController::class, 'detailsView'])->name('details.view');


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

// Route::get('/', function () {
//     return view('client.pages.index');
// });
Route::get('/about', function () {
    return view('client.pages.about');
});
Route::get('/bx1', function () {
    return view('client.pages.x1');
});
Route::get('/bx2', function () {
    return view('client.pages.x2');
});
Route::get('/management-team', function () {
    return view('client.pages.management-team');
});

Route::get('/plants-&-equipments', function () {
    return view('client.pages.plants-n-equipments');
});
Route::get('/services', function () {
    return view('client.pages.services');
});
Route::get('/contact-us', function () {
    return view('client.pages.contact-us');
});
Route::get('/clients', function () {
    return view('client.pages.clients');
});

Route::get('/projects-details', function () {
    return view('client.pages.single-property-1');
});
Route::get('/under-construction', function () {
    return view('client.pages.under-construction');
});
<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\home;
use App\Livewire\about;
use App\Livewire\products;
use App\Livewire\contact;
use App\Livewire\Blogs;
use App\Livewire\Productdetails;
use App\Livewire\Industries;



use App\Livewire\admin\Dashboard;
use App\Livewire\admin\Maincategory;
use App\Livewire\admin\Subcategory;
use App\Livewire\admin\Insertcategory;




Route::get('/', home::class)->name('home');

Route::get('/about-us', about::class)->name('about');
Route::get('/contact-us', contact::class)->name('contact');
Route::get('/products', products::class)->name('products');
Route::get('/blogs', Blogs::class)->name('blogs');
Route::get('/productdetails', Productdetails::class)->name('Productdetails');
Route::get('/industries', Industries::class)->name('Industries');





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/admin', Dashboard::class)->name('Dashboard');
    Route::get('/admin/main_category', Maincategory::class)->name('Maincategory');
    Route::get('/admin/sub_category', Subcategory::class)->name('Subcategory');
    Route::get('/admin/insert_category', Insertcategory::class)->name('Insertcategory');

    Route::post('/admin/main_category', [Maincategory::class, 'create'])->name('master');
    // Route::get('/insert_category',[Insertcategory::class,'create'])->name('touch');

    // routes main cateogory 
    Route::post('/admin/main_category', [Maincategory::class, 'create'])->name('master');
    Route::get('delete-category/{id}', [Maincategory::class, 'detelecate']);
    Route::post('category_update',[Maincategory::class,'cateupd'])->name('updatecateupdate');
    


    // subcategory routes 
        Route::post('/admin/sub_category', [Subcategory::class, 'subcreate'])->name('subcreate_category');
        Route::get('delete-subcategory/{id}', [Subcategory::class, 'detelesubcate']);
        Route::post('/update_category', [Subcategory::class, 'updsubcate'])->name('subcateupd');
});

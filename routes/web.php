<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\Products;
use App\Livewire\Contact;
use App\Livewire\Blogs;
use App\Livewire\Industries;
use App\Livewire\Thankyou;
use App\Livewire\Blogdeatails;

use App\Livewire\Pdetail;


use App\Livewire\admin\Dashboard;
use App\Livewire\admin\Maincategory;
use App\Livewire\admin\Subcategory;
use App\Livewire\admin\Insertcategory;
use App\Livewire\admin\Enquiry;
use App\Livewire\admin\Productslist;
use App\Livewire\admin\Productpreview;
use App\Livewire\admin\productenqurie;
use App\Livewire\admin\Addblog;
use App\Livewire\admin\Bloglist;




Route::get('/', home::class)->name('home');

Route::get('/about-us', about::class)->name('about');
Route::get('/contact-us', contact::class)->name('contact');
Route::get('/products', products::class)->name('products');
Route::get('/blogs', Blogs::class)->name('blogs');


Route::get('/detailprod/{id}/{title}', Pdetail::class);
Route::post('/postcontact', [Pdetail::class, 'productenquiry'])->name('enqpost');


Route::get('/industries', Industries::class)->name('Industries');

Route::get('/thankyou', Thankyou::class)->name('thanks');
Route::get('/blog-details/{id}/{title}', Blogdeatails::class)->name('');

// static contact page data post 
Route::post('/contact-us', [contact::class, 'contactpost'])->name('postcontact');





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
 

  Route::get('/admin', Dashboard::class)->name('Dashboard');
  Route::get('/admin/main_category', Maincategory::class)->name('Maincategory');
  Route::get('/admin/sub_category', Subcategory::class)->name('Subcategory');

  Route::post('/admin/main_category', [Maincategory::class, 'create'])->name('master');
  // Route::get('/insert_category',[Insertcategory::class,'create'])->name('touch');

  // routes main cateogory 
  Route::post('/admin/main_category', [Maincategory::class, 'create'])->name('master');
  Route::get('delete-category/{id}', [Maincategory::class, 'detelecate']);
  Route::post('category_update', [Maincategory::class, 'cateupd'])->name('updatecateupdate');



  // subcategory routes 
  Route::post('/admin/sub_category', [Subcategory::class, 'subcreate'])->name('subcreate_category');
  Route::get('delete-subcategory/{id}', [Subcategory::class, 'detelesubcate']);
  Route::post('/update_category', [Subcategory::class, 'updsubcate'])->name('subcateupd');
  Route::get('/get-subcategories/{id}', [Subcategory::class, 'getSubcategories']);


  // Add Products ROutes
  Route::get('/admin/Insertproduct', Insertcategory::class)->name('Insertproduct');
  Route::post('/admin/Insertproduct', [Insertcategory::class, 'addproduct'])->name('Insertproduct');


  // enquiry routes ye route header par click kare par open ho raha h 
  Route::get('/admin/enquiry', Enquiry::class)->name('Enquiry');
  Route::get('delete-contact/{id}', [Enquiry::class, 'detelecontact']);
  Route::get('/update_enquiry/{id}/{status}', [Enquiry::class, 'updatecontactstatus'])->name('updatestatus');

  Route::get('/admin/productenquiry', productenqurie::class)->name('ProductEnquiry');
    Route::get('delete-productenquiry/{id}', [productenqurie::class, 'deleteproductenquiry']);

  // Productlist
  Route::get('/admin/products', Productslist::class)->name('Productslist');
  Route::get('delete-product/{id}', [Productslist::class, 'deleteProduct']);
  Route::post('/admin/update/products', [Productslist::class, 'updateproduct'])->name('Updateproduct');
  Route::get('/get-subcategories/{id}', [Productslist::class, 'getSubcategories']);
  Route::post('/update/status/product', [Productslist::class, 'changestatus']);



  // productprevieew
  Route::get('/admin/Productpreview', Productpreview::class)->name('ProductPreview');
  Route::get('/admin/product/preview/{id}', Productpreview::class)->name('adminProductPreview');

  // blog 
    Route::get('/admin/blog', Addblog::class)->name('addblog');
    Route::post('/blogs/store', [Addblog::class, 'addBlog'])->name('addblogs');

    // bloglist
     Route::get('/admin/blog-list', Bloglist::class)->name('bloglist');
       Route::get('delete-blog/{id}', [Bloglist::class, 'deteleblog']);
         Route::post('/update_blog', [Addblog::class, 'updateblog'])->name('blogupdate');
           Route::post('/update/status/blog', [Bloglist::class, 'changeStatusBlog']);


});
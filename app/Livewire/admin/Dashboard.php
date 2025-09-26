<?php

namespace App\Livewire\admin;
use App\Models\Enquiry; 
use App\Models\Allproducts;
use App\Models\addblog;
use App\Models\productenquire;
use App\Models\Subcategory; 
use App\Models\Categories; 
use App\Models\User;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $totalCategory       = Categories::count();
        $totalSubCategory    = Subcategory::count();
        $totalProductEnquiry = productenquire::count();
        $totalContactEnquiry = Enquiry::count(); 
        $totalBlog           = addblog::count();
        $totalproduct        = Allproducts::count();

        

         return view('livewire.admin.dashboard',  [  'totalCategory' => $totalCategory,   'totalSubCategory' => $totalSubCategory, 'totalProductEnquiry' => $totalProductEnquiry,   'totalContactEnquiry' => $totalContactEnquiry,'totalBlog' => $totalBlog,   'totalproduct' => $totalproduct
        ])->layout('layouts.adminheader');
 
    }
}

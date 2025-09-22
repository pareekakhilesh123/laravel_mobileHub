<?php

namespace App\Livewire\admin;
use App\Models\Categories;
use Illuminate\Http\Request;
use Livewire\Component;
 use App\Models\Subcategory as subcate;

class Insertcategory extends Component
{
    public function render()
    {
          $sub = subcate::get();
          $data = Categories::get();
        return view('livewire.admin.insertcategory' , ['cate' => $data,'subget'=>$sub]  )->layout('layouts.adminheader');;
    }
}

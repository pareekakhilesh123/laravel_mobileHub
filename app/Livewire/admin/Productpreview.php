<?php

namespace App\Livewire\admin;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Allproducts;
use App\Models\Categories;
use App\Models\Subcategory as subcate;


class Productpreview extends Component
{

     public $id;
    public $data;


    // Mount method id ke basis par product fetch karega
    public function mount($id)
    {
        $this->data = Allproducts::where('id',$id)->first();
       
    }

    public function render()
    {
         $data = Allproducts::get();
                $categ   = Categories::get();
            $sub = subcate::get();
        return view('livewire.admin.productpreview' , ['products' => $data , 'cate' => $categ,'subget'=>$sub])->layout('layouts.adminheader');

    }
}

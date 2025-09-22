<?php

namespace App\Livewire\admin;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Allproducts;
use App\Models\Categories;
use App\Models\Subcategory as subcate;

class Productslist extends Component
{
    public function render()
    {
          $data = Allproducts::get();
                $categ   = Categories::get();
            $sub = subcate::get();
        return view('livewire.admin.productslist' ,  ['products' => $data , 'cate' => $categ,'subget'=>$sub] )->layout('layouts.adminheader');
    }

     public function deleteProduct($id)
    {
       
       $d = Allproducts::find($id);
       $d->delete();

        return back()->with('success', 'Product  deleted successfully!');
    }

}
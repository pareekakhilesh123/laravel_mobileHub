<?php

namespace App\Livewire;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Allproducts;
use App\Models\Subcategory as subcate;
use App\Models\Categories;


class Productdetails extends Component
{

    public $id;
    public $data;

    public function mount($id){
        $this->data = Allproducts::where('id',$id)->first();
    }
    
    public function render()

    {
          
          $categ   = Categories::get();
          $sub = subcate::get();
          return view('livewire.productdetails',[ 'cate' => $categ,'subget'=>$sub])->layout('layouts.header');
   
    }
}

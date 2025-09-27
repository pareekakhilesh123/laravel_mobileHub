<?php

namespace App\Livewire;
use App\Models\Allproducts;
use Illuminate\Http\Request;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
          $title = "All Products Show";
        $meta_title = 'about';
        $meta_desc = 'about';
        $meta_key = 'about';
          $data = Allproducts::where('status','Active')->paginate(20); 

        return view('livewire.products' ,  ['products' => $data ])->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}


<?php

namespace App\Livewire;
use App\Models\Allproducts;
use Illuminate\Http\Request;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
          $title = "Home Page";
        $meta_title = 'about';
        $meta_desc = 'about';
        $meta_key = 'about';

           $data = Allproducts::paginate(6); 
        return view('livewire.home'  , ['products' => $data ])->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}

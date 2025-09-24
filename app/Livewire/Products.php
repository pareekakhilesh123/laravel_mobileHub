<?php

namespace App\Livewire;
use App\Models\Allproducts;
use Illuminate\Http\Request;

use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        
          $data = Allproducts::paginate(6); 

        return view('livewire.products' ,  ['products' => $data ])->layout('layouts.header');
    }
}


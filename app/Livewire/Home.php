<?php

namespace App\Livewire;
use App\Models\Allproducts;
use Illuminate\Http\Request;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
           $data = Allproducts::paginate(6); 
        return view('livewire.home'  , ['products' => $data ])->layout('layouts.header');
    }
}

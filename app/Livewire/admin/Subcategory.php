<?php

namespace App\Livewire\admin;
use App\Models\Categories;
use Illuminate\Http\Request;

use Livewire\Component;

class Subcategory extends Component
{
    public function render()
    {
            $data = Categories::get();
        return view('livewire.admin.subcategory' ,  ['show' => $data] )->layout('layouts.adminheader');;
    }
}

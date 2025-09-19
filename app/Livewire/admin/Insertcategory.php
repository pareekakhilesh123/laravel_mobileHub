<?php

namespace App\Livewire\admin;
use App\Models\Categories;
use Illuminate\Http\Request;
use Livewire\Component;

class Insertcategory extends Component
{
    public function render()
    {
          $data = Categories::get();
        return view('livewire.admin.insertcategory' ,['cate' => $data] )->layout('layouts.adminheader');;
    }
}

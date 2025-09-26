<?php

namespace App\Livewire;
use Illuminate\Http\Request;
use App\Models\addBlog as blog;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
          $title = "Blogs";
        $meta_title = 'about';
        $meta_desc = 'about';
        $meta_key = 'about';
         $blog = blog::get();
        return view('livewire.blogs' ,  ['blogs' => $blog])->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}


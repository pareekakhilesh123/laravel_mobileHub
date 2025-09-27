<?php

namespace App\Livewire;
use Illuminate\Http\Request;
use App\Models\addblog as blog;

use Livewire\Component;

class Blogs extends Component
{
    public function render()
    {
          $title = "Blog";
        $meta_title = 'blog';
        $meta_desc = 'blog';
        $meta_key = 'blog';
         $blog = blog::get()->where('status','Active');
        return view('livewire.blogs' ,  ['blogs' => $blog])->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}


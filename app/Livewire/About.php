<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{

    public function render()
    {
           $title = "About Us";
        $meta_title = 'about';
        $meta_desc = 'about';
        $meta_key = 'about';
        return view('livewire.about')->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}
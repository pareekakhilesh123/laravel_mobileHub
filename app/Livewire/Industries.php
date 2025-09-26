<?php

namespace App\Livewire;

use Livewire\Component;

class Industries extends Component
{
    public function render()
    {
          $title = "Industries";
        $meta_title = 'Industries';
        $meta_desc = 'Industries';
        $meta_key = 'Industries';
        return view('livewire.industries')->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}

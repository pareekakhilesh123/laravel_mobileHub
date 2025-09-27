<?php

namespace App\Livewire;

use Livewire\Component;

class Thankyou extends Component
{
    public function render()
    {
        
          $title = "Thanks Page";
        $meta_title = 'thank';
        $meta_desc = 'thanks';
        $meta_key = 'thanks';
        return view('livewire.thankyou')->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}

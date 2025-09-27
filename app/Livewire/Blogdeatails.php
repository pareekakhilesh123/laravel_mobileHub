<?php

namespace App\Livewire;
use App\Models\addBlog as blog;

use Livewire\Component;

class Blogdeatails extends Component
{
    public $id ;
    public $data;
    public function mount($id){
        
        $this->data=blog::where('id',$id)->first();
            // dd($this->data);
    }
    public function render()
    {
         $meta =  blog::where('id',$this->id)->first();
      $title =  $meta->blog_title;;
         $meta_title = $meta->meta_title??$meta->blog_title;
        $meta_desc = $meta->meta_description??$meta->blog_title;
        $meta_key = $meta->meta_keywords??$meta->blog_title;     

      $blog = blog::where('id', '!=', $this->id)->get()->where('status','Active');
        return view('livewire.blogdeatails', ['blogs' => $blog]   )->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }
}

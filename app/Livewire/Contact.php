<?php

namespace App\Livewire;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
          $title = "Contact Page";
       $meta_title = 'about';
        $meta_desc = 'about';
        $meta_key = 'about';
        return view('livewire.contact')->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }

          public function contactpost(Request $request)
    {
        $insert = new Enquiry();
        $insert->name = $request->name;
        $insert->email = $request->email;
         $insert->phone = $request->phone;
        $insert->message = $request->message;
        $insert->save();
       return redirect()->route('thanks');

    }
}

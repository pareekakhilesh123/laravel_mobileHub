<?php

namespace App\Livewire;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
       
        return view('livewire.contact')->layout('layouts.header');
    }

          public function contactpost(Request $request)
    {
        $insert = new Enquiry();
        $insert->name = $request->name;
        $insert->email = $request->email;
         $insert->phone = $request->phone;
        $insert->message = $request->message;
        $insert->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}

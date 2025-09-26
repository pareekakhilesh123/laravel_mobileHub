<?php

namespace App\Livewire;
use App\Models\Allproducts;
use App\Models\productenquire;
use Livewire\Component;
use Illuminate\Http\Request;


class Pdetail extends Component
{
    public $id;
    public $data;

    public function mount($id){
        $this->data = Allproducts::where('id',$id)->first();
    }
    public function render()
    {
        $meta =  Allproducts::where('id',$this->id)->first();

        $title = $meta->product_title;
        $meta_title = $meta->meta_title??$meta->product_title;
        $meta_desc = $meta->meta_description??$meta->product_title;
        $meta_key = $meta->meta_keywords??$meta->product_title;
         $relate = Allproducts::where('id', '!=', $this->id)->limit(3)->get();
        return view('livewire.pdetail' ,['relproducts' => $relate ])->layout('layouts.header',['meta_key'=>$meta_key,'meta_title'=>$meta_title,'meta_desc'=>$meta_desc,'title'=>$title]);
    }


    public function productenquiry(Request $request)
{
    // Validation (optional but recommended)
   
    // Insert enquiry
    $insert = new productenquire();
    $insert->product_title = $request->product_title;
    $insert->name          = $request->name;
    $insert->email         = $request->email;
    $insert->phone         = $request->phone;
    $insert->message       = $request->message;
    $insert->save();

    return redirect()->route('thanks');
}

    
}
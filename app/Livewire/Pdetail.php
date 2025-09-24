<?php

namespace App\Livewire;
use App\Models\Allproducts;
use Livewire\Component;

class Pdetail extends Component
{
    public $id;
    public $data;

    public function mount($id){
        $this->data = Allproducts::where('id',$id)->first();
    }
    public function render()
    {
        return view('livewire.pdetail')->layout('layouts.header');
    }
}

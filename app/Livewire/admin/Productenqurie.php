<?php


namespace App\Livewire\admin;
use App\Models\productenquire;
use Illuminate\Http\Request;

use Livewire\Component;

class Productenqurie extends Component
{
    public function render()
    {
         $cont = productenquire::get();
        return view('livewire.admin.productenqurie' ,  ['contactlist' => $cont])->layout('layouts.adminheader');;
         

    }

     public function deleteproductenquiry($id)
    {
        $category = productenquire::find($id);

        if ($category) {
            $category->delete();
        }

        return back()->with('success', 'Product enquiry deleted successfully!');
    }
}





<?php

namespace App\Livewire\admin;
use App\Models\Categories;
use Illuminate\Http\Request;
use Livewire\Component;

class Maincategory extends Component
{
    public function render()
    {
           $data = Categories::get();
         return view('livewire.admin.maincategory', ['show' => $data] )->layout('layouts.adminheader');  



         
    } 

  public function create(Request $request) 
{
    $insert = new Categories();
    $insert->label = $request->label;
    $insert->value = $request->value;
    $insert->master = "Master";

    if ($request->hasFile('upload')) {
        
        $profile = time() . '.' . $request->file('upload')->extension();
        $request->file('upload')->move(public_path('allimage'), $profile);
        $insert->image = $profile;
    } else {
       
        $insert->image = 'default.png'; 
    }

    $insert->save();
    return back();
}



public function detelecate($id)
{
    $category = Categories::find($id);

    if ($category) {
        $category->delete(); // ✅ Model ka delete method
    }

    return back()->with('success', 'Category deleted successfully!');
}



}





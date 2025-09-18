<?php

namespace App\Livewire\admin;
use App\Models\Categories;
 use App\Models\Subcategory as subcate;
use Illuminate\Http\Request;

use Livewire\Component;

class Subcategory extends Component
{
    public function render()
    {
            $data = Categories::get();
        return view('livewire.admin.subcategory' ,  ['show' => $data] )->layout('layouts.adminheader');;
    }


      public function subcreate(Request $request)
    {
        $insert = new subcate();
        $insert->label = $request->label;
        $insert->value = $request->label;
         $insert->priority = $request->priority ?? 10;
        $insert->category_id = $request->cate_id;
       

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



}

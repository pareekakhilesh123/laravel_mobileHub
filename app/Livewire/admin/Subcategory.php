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
          
                 $data   = Categories::get();
            $sub = subcate::get();
        return view('livewire.admin.subcategory' ,  ['cate' => $data,'subget'=>$sub] )->layout('layouts.adminheader');;
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


    
    public function detelesubcate($id)
    {
        $category = subcate::find($id);

        if ($category) {
            $category->delete();
        }

        return back()->with('success', 'Sub Category deleted successfully!');
    }


     public function updsubcate(Request $request)
    {
        $updid = $request->updid;

        // dd($updid);

        $upd = subcate::where('id', $updid)->first();

        $upd->label = $request->label;
        $upd->value = $request->label;
        $upd->priority = $request->priority ?? 10;
        // dd($upd->priority);

        if ($request->hasFile('upload')) {

            $profile = time() . '.' . $request->file('upload')->extension();
            $request->file('upload')->move(public_path('allimage'), $profile);
            $upd->image = $profile;
        }

        $upd->save();

        return back()->with('success', 'sub Category Updated successfully!');;
    }

    public function getSubcategories($id)
{
    $subcategories = subcate::where('category_id', $id)->get();
    return response()->json($subcategories);
}




}

<?php

namespace App\Livewire\admin;
use App\Models\Categories;
use Illuminate\Http\Request;
use Livewire\Component;
 use App\Models\Subcategory as subcate;
 use App\Models\Allproducts;
use App\Models\junction_product;
class Insertcategory extends Component
{
    public function render()
    {
          $sub = subcate::get();
          $data = Categories::get();
        return view('livewire.admin.insertcategory' , ['cate' => $data,'subget'=>$sub]  )->layout('layouts.adminheader');
    }


    public function addproduct(Request $request)
    {
        // dd($request->all()); 
        $insert = new Allproducts();
        $insert->product_title = $request->title;
        $insert->product_description = $request->description;
         $insert->category_id = $request->cate_id;
        $insert->sub_category_id = $request->sub_id;
         $insert->priority = $request->priority ?? 10;
        
        $insert->quantity = $request->quantity;
          $insert->price = $request->price;
        $insert->discount_type = $request->discount_type;
         $insert->discount_rate = $request->discount_rate;
        $insert->tax_amount = $request->tax_amount;
         $insert->shipping_cost = $request->shipping_cost;
        $insert->final_price = $request->final_price;
         $insert->meta_title = $request->meta_title;
        $insert->meta_keywords = $request->meta_keywords;
         $insert->meta_description	 = $request->meta_description;


        $insert->feature_key = implode(',', $request->feature_keys);

        $insert->feature_value = implode(',', $request->feature_values);
      
      
       

        if ($request->hasFile('thumbnail')) {

            $profile = time() . '.' . $request->file('thumbnail')->extension();
            $request->file('thumbnail')->move(public_path('allimage'), $profile);
            $insert->thumbnail_image = $profile;
        } else {

            $insert->thumbnail_image = 'default.png';
        }

        // multiplae images

        if ($request->hasFile('multipleimage')) {
            $images = [];

            foreach ($request->file('multipleimage') as $file) {
                if ($file && $file->isValid()) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move(public_path('allimage'), $filename);
                    $images[] = $filename;
                }
            }

            $insert->images = implode(',', $images);
        
        };

        $insert->save();
        $pid = $insert->id;

        $jun = new junction_product();
        $jun->product_id = $pid;
        $jun->qty = $request->quantity;
        
        $jun->status = 'Active';
        $jun->save();
    
     

        return back();
    }




    // Update Product Code 
    public function updateproduct(Request $request)
{
    $pid = $request->pid; // Product ID

    // Find product by ID
    $update = Allproducts::where('id', $pid)->first();

    // Update fields
    $update->product_title       = $request->title;
    $update->product_description = $request->description;
    $update->category_id         = $request->cate_id;
    $update->sub_category_id     = $request->sub_id;
    $update->priority            = $request->priority ?? 10;

    $update->quantity        = $request->quantity;
    $update->price           = $request->price;
    $update->discount_type   = $request->discount_type;
    $update->discount_rate   = $request->discount_rate;
    $update->tax_amount      = $request->tax_amount;
    $update->shipping_cost   = $request->shipping_cost;
    $update->final_price     = $request->final_price;
    $update->meta_title      = $request->meta_title;
    $update->meta_keywords   = $request->meta_keywords;
    $update->meta_description = $request->meta_description;

    $update->feature_key   = implode(',', $request->feature_keys);
    $update->feature_value = implode(',', $request->feature_values);

    // Thumbnail update (optional)
    if ($request->hasFile('thumbnail')) {
        $profile = time() . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('allimage'), $profile);
        $update->thumbnail_image = $profile;
    }

    // Multiple images update (optional)
    if ($request->hasFile('multipleimage')) {
        $images = [];

        foreach ($request->file('multipleimage') as $file) {
            if ($file && $file->isValid()) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('allimage'), $filename);
                $images[] = $filename;
            }
        }

        $update->images = implode(',', $images);
    }

    // Save product update
    $update->save();

    // Junction table update
    $jun = junction_product::where('product_id', $pid)->first();
    if ($jun) {
        $jun->qty    = $request->quantity;
        $jun->status = 'Active';
        $jun->save();
    }

    return back()->with('success', 'Product Updated Successfully!');
}


}
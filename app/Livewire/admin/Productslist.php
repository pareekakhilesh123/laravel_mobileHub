<?php

namespace App\Livewire\admin;
use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Allproducts;
use App\Models\Subcategory as subcate;
use App\Models\Categories;
use App\Models\junction_product;

class Productslist extends Component
{
    public function render()
    {
          $data = Allproducts::get();
          $categ   = Categories::get();
          $sub = subcate::get();
        return view('livewire.admin.productslist' ,  ['products' => $data , 'cate' => $categ,'subget'=>$sub] )->layout('layouts.adminheader');
    }

     public function deleteProduct($id)
    {
       
       $d = Allproducts::find($id);
       $d->delete();

        return back()->with('success', 'Product  deleted successfully!');
    }

       
public function updateproduct(Request $request)
{
    $pid = $request->pid;
    $update = Allproducts::where('id', $pid)->first();

    // Basic fields
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

    $update->feature_key   = implode(',', $request->feature_keys ?? []);
    $update->feature_value = implode(',', $request->feature_values ?? []);

    // Thumbnail update
    if ($request->hasFile('thumbnail')) {
        $profile = time() . '.' . $request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('allimage'), $profile);
        $update->thumbnail_image = $profile;
    }

    //  Handle Multiple Images
    $existingImages = $update->images ? explode(',', $update->images) : [];

    // 1. Removed images ko hatao
    if ($request->removed_images) {
        $removed = explode(',', $request->removed_images);
        $existingImages = array_diff($existingImages, $removed);

        // Agar server se bhi delete karna hai to:
        foreach ($removed as $img) {
            $path = public_path('allimage/' . $img);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    // . Nayi images add karo
    if ($request->hasFile('multipleimage')) {
        foreach ($request->file('multipleimage') as $file) {
            if ($file && $file->isValid()) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('allimage'), $filename);
                $existingImages[] = $filename;
            }
        }
    }

    // . Final images update
    $update->images = implode(',', $existingImages);

    // Save product update
    $update->save();

    //  Junction table update
    $jun = junction_product::where('product_id', $pid)->first();
    if ($jun) {
        $jun->qty    = $request->quantity;
        $jun->status = 'Active';
        $jun->save();
    }

    return back()->with('success', 'Product Updated Successfully!');
}


    public function getSubcategories($id)
{
    $subcategories = subcate::where('category_id', $id)->get();
    return response()->json($subcategories);
}


public function changestatus(Request $req)
    {
        $id = $req->cateid;

        $product = Allproducts::find($id);

        if (!$product) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found'
            ]);
        }

        // Toggle status
        $product->status = $product->status === "Active" ? "inactive" : "Active";
        $product->save();

        return response()->json([
            'status' => true,
            'message' => 'Status updated successfully',
            'new_status' => $product->status
        ]);
    }



}
<?php
namespace App\Livewire\admin;
use Illuminate\Http\Request;
use App\Models\addBlog as blog;
use Livewire\Component;


class Addblog extends Component
{
    public function render()
    {
        return view('livewire.admin.addblog')->layout('layouts.adminheader');
    }

    public function addblog(Request $request)
{
    // Insert new blog
    $blog = new blog();
    $blog->blog_title       = $request->blog_title;
    $blog->blog_description = $request->blog_description;
    $blog->priority         = $request->priority ?? 10;
    $blog->meta_title       = $request->meta_title;
    $blog->meta_keywords    = $request->meta_keywords;
    $blog->meta_description = $request->meta_description;
    $blog->status           = 'Active';

    // Thumbnail upload
    if ($request->hasFile('blog_image')) {
        $fileName = time() . '.' . $request->file('blog_image')->extension();
        $request->file('blog_image')->move(public_path('blog_images'), $fileName);
        $blog->blog_image = $fileName;
    } else {
        $blog->blog_image = 'default.png';
    }

    $blog->save();

    return redirect()->back()->with('success', 'Blog added successfully!');
}

public function updateblog(Request $request)
{
    $blog_id = $request->blog_id;
    $update = blog::where('id', $blog_id)->first();

    // Basic fields
    
    $update->blog_title       = $request->blog_title;
    $update->blog_description = $request->blog_description;
    $update->priority         = $request->priority ?? 10;
    $update->meta_title       = $request->meta_title;
    $update->meta_keywords    = $request->meta_keywords;
    $update->meta_description = $request->meta_description;
  

    // Thumbnail update
    if ($request->hasFile('blog_image')) {
        $profile = time() . '.' . $request->file('blog_image')->extension();
        $request->file('blog_image')->move(public_path('blog_images'), $profile);
        $update->blog_image = $profile;
    }

  
    
    // Save product update
    $update->save();

   

    return back()->with('success', 'Product Updated Successfully!');
}

}

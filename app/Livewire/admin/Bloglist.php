<?php


namespace App\Livewire\admin;
use Illuminate\Http\Request;
use App\Models\addBlog as blog;
use Livewire\Component;

class Bloglist extends Component
{
    public function render()
    {
          $blog = blog::get();
        return view('livewire.admin.bloglist', ['blogs' => $blog])->layout('layouts.adminheader');
    }

        public function deteleblog($id)
    {
        $delblog = blog::find($id);

        if ($delblog) {
            $delblog->delete();
        }

        return back()->with('success', 'blog  deleted successfully!');
    }



    public function changestatusblog(Request $req)
    {
        $id = $req->cateid;

        $blogs = blog::find($id);

        if (!$blogs) {
            return response()->json([
                'status' => false,
                'message' => 'Product not found'
            ]);
        }

        // Toggle status
        $blogs->status = $blogs->status === "Active" ? "Disable" : "Active";
        $blogs->save();

        return response()->json([
            'status' => true,
            'message' => 'Status updated successfully',
            'new_status' => $blogs->status
        ]);
    }

          



}

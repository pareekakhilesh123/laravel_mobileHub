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

          



}

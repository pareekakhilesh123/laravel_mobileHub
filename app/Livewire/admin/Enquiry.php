<?php

namespace App\Livewire\admin;
use App\Models\Enquiry as enq;
use Illuminate\Http\Request;
use Livewire\Component;

class Enquiry extends Component
{

    public $id;
    public $newStatus;
    public $data;

    public function mount($id, $newStatus = null){
        $this->id = $id;
        $this->data = enq::where('id',$id)->first();

        if ($newStatus) {
            $this->status = $newStatus;
            $this->data->status = $newStatus;
            $this->data->save();
        }
    }
    public function render()
    {
           $cont = enq::get();
        return view('livewire.admin.enquiry', ['contactlist' => $cont])->layout('layouts.adminheader');
    }

      public function detelecontact($id)
    {
        $contactid = enq::find($id);

        if ($contactid) {
            $contactid->delete();
        }

        return back()->with('success', ' Contact deleted successfully!');
    }

    
public function updatecontactstatus($id, $status)
{
    // Allowed statuses
    $allowed = ['Pending','Resolved'];

    // Debug check (important)
    if (!in_array($status, $allowed)) {
        return back()->with('error', "Invalid status: $status");
    }

    // Find enquiry
    $enq = enq::find($id);
    if (!$enq) {
        return back()->with('error', 'Record not found!');
    }

    // Update
    $enq->status = $status;
    $enq->save();

    return back()->with('success', "Status updated to $status successfully!");
}



}

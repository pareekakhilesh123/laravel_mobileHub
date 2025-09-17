<?php

namespace App\Livewire\admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
         return view('livewire.admin.dashboard')->layout('layouts.adminheader');
 
    }
}

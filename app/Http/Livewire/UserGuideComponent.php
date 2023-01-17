<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserGuideComponent extends Component
{
    public function render()
    {
        return view('livewire.user-guide-component')->layout('layouts.base');
    }
}

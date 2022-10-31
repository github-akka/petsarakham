<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Service;
use App\Models\ServiceCategory;


class AllServiceComponent extends Component
{
    use WithPagination;
    public function render()
    {

        $services = Service::paginate(16);
        return view('livewire.all-service-component',['services'=>$services])->layout('layouts.base');
    }
}

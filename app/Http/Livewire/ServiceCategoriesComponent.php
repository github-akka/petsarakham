<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\Service;
class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.service-categories-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}

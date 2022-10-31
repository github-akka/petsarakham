<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\Product;
class ProductCategoriesComponent extends Component
{
    public function render()
    {
        $scategories = ProductCategory::all();
        return view('livewire.product-categories-component',['scategories'=>$scategories])->layout('layouts.base');
    }
}

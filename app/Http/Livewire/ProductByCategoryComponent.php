<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategory;
use App\Models\Service;
use App\Models\Product;

class ProductByCategoryComponent extends Component
{
    public $category_slug;

    public function mount($category_slug)
    {
        $this->category_slug = $category_slug;
    }

    public function render()
    {
        $scategory = ServiceCategory::where('slug',$this->category_slug)->first();
        return view('livewire.product-by-category-component',['scategory' =>$scategory])->layout('layouts.base');
    }
}

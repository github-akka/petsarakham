<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\ServiceCategory;
use App\Models\Service;
use Illuminate\Support\Facades\DB;


class HomeComponent extends Component
{
    public function render()
    {


        $services = Service::paginate(10);

        $scategories = ServiceCategory::inRandomOrder()->take(8)->get();
        $f_service = DB::table('services')->select('name', 'slug', 'tagline', 'thumbnail', 'price',)->where('featured', 1)->inRandomOrder()->take(8)->get();
        $f_categories = ServiceCategory::where('featured', 1)->take(8)->get();
        $sid = ServiceCategory::whereIn('slug', ['shower'])->get()->pluck('id');
        $c_services = Service::select('name', 'slug', 'tagline', 'thumbnail', 'price',)->whereIn('service_category_id', $sid)->inRandomOrder()->take(8)->get();
        return view('livewire.home-component', ['scategories' => $scategories, 'f_service' => $f_service, 'f_categories' => $f_categories, 'c_services' => $c_services])->layout('layouts.base');
    }
}

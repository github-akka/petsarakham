<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;


class AllServiceComponent extends Component
{
	use WithPagination;
	public function render()
	{

		//$services = Service::paginate(16);
		$services = Service::with('user')->select('name', 'slug', 'tagline', 'price', 'thumbnail')->simplePaginate(16);
		return view('livewire.all-service-component', ['services' => $services])->layout('layouts.base');
	}
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;


class ServiceDetailsComponent extends Component
{
    use WithPagination;

    public $service_slug;
    public $user_id;
    public $service_id;
    public $service_category_id;
    public $rating;
    public $description;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rating' => 'required',
            'description' => 'required',
        ]);

    }

    public function addReview()
    {
        $this->validate([
            'rating' => 'required',
            'description' => 'required',
        ]);

        $review = new Review();
        $review->rating = $this->rating;
        $review->description = $this->description;
        $review->description = $this->description;
        $review->save();
        session()->flash('message','Review Add successfully! ');
    }


    
    public function service_id($service_id)
    {
        Service::add($service_id)->associate('App\models\Service');
        return redirect()->route('service_booking');
    }
    




    
    public function render()
    {
        $service = Service::where('slug',$this->service_slug)->first();
       // tem = Service:: find($this->$service_slug);$serviceI
        $r_service = Service::where('service_category_id',$service->service_category_id)->where('slug','!=',$this->service_slug)->inRandomOrder()->first();
        return view('livewire.service-details-component',['service'=>$service,'r_service'=>$r_service ])->layout('layouts.base');
    }
}

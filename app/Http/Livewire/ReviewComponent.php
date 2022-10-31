<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\ServiceCategory;
use App\Models\Service;
use App\Models\User;
use App\Models\Booking;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ReviewComponent extends Component

{
    use WithPagination;

    public $service_id;
    public $rating;
    public $description;

    public function mount($service_id)
    {
        $this->service_id = $service_id;
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
        $review->service_id = $this->service_id;
        $review->save();
        session()->flash('message','Review Add successfully! ');
    }

    public function render()
    {

        $serviceItem = Service:: find('service_id',$this->$service_id);
        
        return view('livewire.review-component',['serviceItem'=>$serviceItem])->layout('layouts.base');
    }
}

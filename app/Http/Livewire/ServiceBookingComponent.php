<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Service;
use App\Models\Booking;
use App\Models\Pet;
use Illuminate\Support\Facades\Auth;


class ServiceBookingComponent extends Component
{

    public $pet_id;
    public $time;
    public $s_date;
    public $end_date;
    public $description;
    //public $total;
    public $service_id;
    public $user_id;
    public $service;

    /* public $service_slug;
    public $service_category_id;

    public function mount($service_id)
    {
        $service = Service::find($service_id);
        $this->category_id = $scategory->id;
        $this->name = $scategory->name;
        $this->slug = $scategory->slug;
        $this->featured = $scategory->featured;
        $this->image = $scategory->image;
        
    }*/

    public function mount($service_id)
    {
        $this->service_id = $service_id;
    }

    public function service_id($service_id)
    {
        Service::add($service_id)->associate('App\models\Service');
        return redirect()->route('service_booking');
    }




    public function updated($fields)

    {
        $this->validateOnly($fields, [

            'pet_id' => 'required',
            'time' => 'required',
            's_date' => 'required',
            'end_date' => 'required',
            'description' => ''
            // 'total' => 'required',
        ]);
    }


    public function createBooking()

    {
        $this->validate([
            'pet_id' => 'required',
            'time' => 'required',
            's_date' => 'required',
            'end_date' => 'required',
            'description' => '',
            //'total' => 'required',
        ]);

        $booking = new Booking();
        $booking->pet_id = $this->pet_id;
        $booking->time = $this->time;
        $booking->s_date = $this->s_date;
        $booking->end_date = $this->end_date;
        $booking->description = $this->description;
        //$booking->total = $this->total;
        $booking->user_id = Auth::user()->id;
        $booking->service_id = $this->service_id;
        $booking->save();
        session()->flash('message', 'Booking successfully! ');
    }

    public function render()

    {
        $spets = Pet::where('user_id', Auth::user()->id)->paginate();

        //$services = Service::where('service_id',Auth::id())->get();
        //$s_booking = Service::where('service_category_id',$service->service_category_id)->where('slug','!=',$this->service_slug)->first();
        return view('livewire.service-booking-component', ['spets' => $spets])->layout('layouts.base');
    }
}

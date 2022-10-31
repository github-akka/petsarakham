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

class BookingDetailComponent extends Component
{
    use WithPagination;

    public $booking_id;

    public function mount($booking_id)
    {
        $this->booking_id = $booking_id;
    }

    public function cancelBooking()
    {
        $booking = Booking:: find($booking_id);
        $booking->status = 'canceled';
        $booking->canceled_date = DB:: raw('CURRENT_DATE');
        $booking->save();

        session()->flash('message','Booking Canceled successfully! ');
    }

    public function render()
    {
        $bookings = Booking::where('user_id',Auth::user()->id)->where('id',$this->booking_id)->first();
        
        return view('livewire.booking-detail-component',['bookings'=>$bookings])->layout('layouts.base');
    }
}

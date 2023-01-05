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
use Illuminate\Support\Facades\Schema;
use Livewire\WithPagination;



class BookingCanceledComponent extends Component
{
    use WithPagination;

    public function updateBookingStatus($booking_id, $status)
    {
        $booking = Booking::find($booking_id);
        $booking->status = $status;
        if ($status == "ordered") {
            $booking->ordered_date = DB::raw('CURRENT_DATE');
        } elseif ($status == "canceled") {
            $booking->canceled_date = DB::raw('CURRENT_DATE');
        }

        $booking->save();

        session()->flash('message', 'Booking Update Status successfully! ');
    }


    public function render()
    {
        $bookings = Booking::join('services', 'services.id', '=', 'bookings.service_id')
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->join('pets', 'pets.id', '=', 'bookings.pet_id')
            ->where('bookings.status', 3)
            ->where('services.user_id',  Auth::user()->id)
            ->orderByDesc('bookings.id')
            //->limit(10)
            ->get(['bookings.*', 'users.name', 'pets.name']);


        /*$bookings = Booking::where('service_id', Auth::user()->id)->where('status', 3)->paginate(5);
        $orders = Booking::where('service_id', Auth::user()->id)->where('status', 3)->paginate(5);*/
        // $ssid = Service::whereIn('user_id',['service_id'])->get()->pluck('id');
        return view('livewire.booking-canceled-component', ['bookings' => $bookings])->layout('layouts.base');
    }
}

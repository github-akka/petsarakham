<?php

namespace App\Http\Livewire\Sprovider;

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



class SproviderBookingComponent extends Component
{
    use WithPagination;

    public function updateBookingStatus($booking_id, $status)
    {
        $booking = Booking::find($booking_id);
        $booking->status = $status;
        if ($status == "2") {
            $booking->ordered_date = DB::raw('CURRENT_DATE');
        } elseif ($status == "3") {
            $booking->canceled_date = DB::raw('CURRENT_DATE');
        }

        $booking->save();

        session()->flash('message', 'Booking Update Status successfully! ');
    }


    public function render()
    {
        $bookings = Booking::where('service_id', Auth::user()->id)->where('status', 1)->paginate(5);
        $orders = Booking::where('service_id', Auth::user()->id)->where('status', 1)->paginate(5);
        // $ssid = Service::whereIn('user_id',['service_id'])->get()->pluck('id');
        return view('livewire.sprovider.sprovider-booking-component', ['orders' => $orders, 'bookings' => $bookings])->layout('layouts.base');
    }
}

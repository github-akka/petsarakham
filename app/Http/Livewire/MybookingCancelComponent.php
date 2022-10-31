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

class MybookingCancelComponent extends Component
{
    use WithPagination;

    public function updateBookingStatus($booking_id, $status)
    {
        $booking = Booking::find($booking_id);
        $booking->status = $status;
        $booking->canceled_date = DB::raw('CURRENT_DATE');
        $booking->save();

        session()->flash('message', 'Canceled Booking successfully! ');
    }

    public function booking_id($booking_id)
    {
        Booking::add($booking_id)->associate('App\models\Booking');
        return redirect()->route('booking.detail');
    }

    public function render()
    {
        $bookings = Booking::where('status', 3)->where('user_id', Auth::user()->id)->paginate(5);
        return view('livewire.mybooking-cancel-component', ['bookings' => $bookings])->layout('layouts.base');
    }
}

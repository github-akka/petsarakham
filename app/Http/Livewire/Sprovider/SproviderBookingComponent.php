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
			$booking->ordered_date = DB::raw('CURRENT_TIMESTAMP');
		} elseif ($status == "3") {
			$booking->canceled_date = DB::raw('CURRENT_TIMESTAMP');
		}

		$booking->save();

		session()->flash('message', 'Booking Updated Status successfully! ');
	}


	public function render()
	{
		//$bookings = Booking::paginate(16);
		/*$bookings  =  DB::table('bookings')
			->join('services', 'bookings.service_id', '=', 'services.id')
			->join('users', 'bookings.user_id', '=', 'users.id')
			->join('pets', 'bookings.pet_id', '=', 'pets.id')
			->select('bookings.*')
			->where('bookings.status', 1)
			->where('services.user_id',  Auth::user()->id)
			->paginate(5);*/
		/*$bookings = DB::table('bookings')
			->join('services', 'bookings.service_id', '=', 'services.id')
			->join('users', 'bookings.user_id', '=', 'users.id')
			//->join('pets', 'bookings.pet_id', '=', 'pets.id')
			->select('bookings.*','users.*','services.*')
			->where('bookings.status', '=', 1)
			->where('services.user_id', '=', Auth::user()->id)
			->paginate(5);*/
		//$bookings = Booking::where('status', 1)->where('service_id')->where('user_id', Auth::user()->id)->paginate(5);
		//$bookings = Booking::where('status', 1)->where('service_id', Auth::user()->id)->paginate(5);
		$bookings = Booking::join('services', 'services.id', '=', 'bookings.service_id')
			->join('users', 'users.id', '=', 'bookings.user_id')
			->join('pets', 'pets.id', '=', 'bookings.pet_id')
			->where('bookings.status', 1)
			->where('services.user_id',  Auth::user()->id)
			->orderByDesc('bookings.id')
			->get(['bookings.*', 'users.name', 'pets.name']);

		return view('livewire.sprovider.sprovider-booking-component', ['bookings' => $bookings])->layout('layouts.base');
	}
}

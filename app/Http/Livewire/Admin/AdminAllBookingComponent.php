<?php

namespace App\Http\Livewire\Admin;

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

class AdminAllBookingComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $abooking = Booking::paginate(10);
        return view('livewire.admin.admin-all-booking-component',['abooking'=>$abooking])->layout('layouts.base');
    }
}

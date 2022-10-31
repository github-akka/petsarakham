<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Illuminate\Database\Eloquent\Model;

class AdminAllServiceController extends Controller
{
    
    public function index()
    {
        $aser = Service::first()->paginate(10);
  
    return view('bookings.all-service',compact('aser'))
        ->with('i', (request()->input('page', 1) - 1) * 10);
    }
}

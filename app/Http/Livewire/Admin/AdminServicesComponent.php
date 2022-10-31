<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\Auth;

use Livewire\WithPagination;
class AdminServicesComponent extends Component
{
    use WithPagination;

    public function deleteService($service_id)
    {
        $service = Service::find($service_id);

        if($service->thumbanil)
        {
            unlink('images/services/thumbnails'.'/'.$service->thumbanil);
        }
        if($service->image)
        {
            unlink('images/services'.'/'.$service->image);
        }

        $service->delete();
        session()->flash('message','Service has been Deleted successfully! ');
    }


    public function render()
    {
        $services = Service::where('user_id',Auth::user()->id)->paginate(5);
       // $services = Service::paginate(10);

        return view('livewire.admin.admin-services-component',['services'=>$services])->layout('layouts.base');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Pet;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AllPetComponent extends Component
{
    use WithFileUploads;


    public function deletePet($id)
    {
        $spet = Pet::find($id);
        if($spet->pet_image)
        {
            unlink('images/pets'.'/'.$spet->pet_image);
        }
        $spet->delete();
        session()->flash('message','Pet has been Deleted successfully! ');
    }

    public function render()
    {

        $spets = Pet::where('user_id',Auth::user()->id)->paginate(5);
        return view('livewire.all-pet-component',['spets'=>$spets])->layout('layouts.base');
    }
}

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

class AddPetComponent extends Component
{
    use WithFileUploads;

    
    public $name;
    public $pet_type;
    public $age;
    public $weight;
    public $pet_image;
    public $user_id;


    public function updated($fields)

    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'pet_image' => 'required|mimes:jpg,png,jpeg',
        ]);
    }

    public function createNewPet()

    {
        $this->validate([
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required',
            'weight' => 'required',
            'pet_image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $spet = new Pet();
        $spet->name = $this->name;
        $spet->pet_type = $this->pet_type;
        $spet->age = $this->age;
        $spet->weight = $this->weight;
        $imageName = Carbon::now()->timestamp. '.' .$this->pet_image->extension();
        $this->pet_image->storeAs('pets',$imageName);
        $spet->pet_image = $imageName;
        $spet->user_id = Auth::user()->id;
        $spet->save();
        session()->flash('message','Pet has been created successfully! ');

    }

    public function render()
    {
        return view('livewire.add-pet-component')->layout('layouts.base');
    }
}

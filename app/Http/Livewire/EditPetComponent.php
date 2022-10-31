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

class EditPetComponent extends Component
{
    use WithFileUploads;

    public $pet_id;
    public $name;
    public $pet_type;
    public $age;
    public $weight;
    public $newimage;
    public $user_id;

    public function mount($pet_id)
    {
        $spet = Pet::find($pet_id);
        $this->pet_id = $spet->id;
        $this->name = $spet->name;
        $this->pet_type = $spet->pet_type;
        $this->age = $spet->age;
        $this->weight = $spet->weight;
        $this->pet_image = $spet->pet_image;
        
    }


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required',
            'weight' => 'required',
        ]);

        if($this->newimage)
        {
         $this->validateOnly($fields,[
             
             'newimage' => 'required|mimes:jpg,png,jpeg'
            ]);
        }
        
    }

    public function updatePet()
    {
        $this->validate([
            'name' => 'required',
            'pet_type' => 'required',
            'age' => 'required',
            'weight' => 'required',
           ]);
       if($this->newimage)
       {
        $this->validate([
            
            'newimage' => 'required|mimes:jpg,png,jpeg'
           ]);
       }

        $spet = Pet::find($this->pet_id);
        $spet->name = $this->name;
        $spet->pet_type = $this->pet_type;
        $spet->age = $this->age;
        $spet->weight = $this->weight;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('pets',$imageName);
            $spet->image = $imageName;
        }
        $spet->save();
        session()->flash('message','Pet has been updated successfully! ');
        
        
        
    }

    public function render()
    {
        
        return view('livewire.edit-pet-component')->layout('layouts.base');
    }
}

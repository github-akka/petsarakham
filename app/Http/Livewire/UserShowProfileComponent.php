<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class UserShowProfileComponent extends Component
{
    

    public $user_id;
    public $name;
    public $email;
    public $address;
    public $phone;
    public $newimage;

    public function mount($user_id)
    {
        $suser = User::find($user_id);
        $this->user_id = $suser->id;
        $this->email = $suser->email;
        $this->address = $suser->address;
        $this->phone = $suser->phone;
        $this->avatar = $suser->avatar;
        
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',            
            
        ]);

        if($this->newimage)
        {
         $this->validateOnly($fields,[
             
             'newimage' => 'required|mimes:jpg,png,jpeg'
            ]);
        }
        
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required', 
           ]);
       if($this->newimage)
       {
        $this->validate([
            
            'newimage' => 'required|mimes:jpg,png,jpeg'
           ]);
       }

        $suser = User::find($this->category_id);
        $suser->name = $this->name;
        $suser->address = $this->address;
        $suser->phone = $this->phone;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('profile',$imageName);
            $suser->avatar = $imageName;
        }
        $suser->save();
        session()->flash('message','Profile has been updated successfully! ');
        
        
        
    }

    public function render()
    {

        $suser = User:: find(Auth::user()->id);
        return view('livewire.user-show-profile-component',['suser'=>$suser])->layout('layouts.base');
    }
}

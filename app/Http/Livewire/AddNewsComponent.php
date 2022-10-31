<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AddNewsComponent extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $image;
    public $user_id;


    public function updated($fields)

    {
        $this->validateOnly($fields,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);
    }

    public function createNews()

    {
        $this->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg',
        ]);

        $snew = new News();
        $snew->title = $this->title;
        $snew->body = $this->body;
        $imageName = Carbon::now()->timestamp. '.' .$this->image->extension();
        $this->image->storeAs('news',$imageName);
        $snew->image = $imageName;
        $snew->user_id = Auth::user()->id;
        $snew->save();
        session()->flash('message','News has been created successfully! ');

    }


    public function render()
    {

        return view('livewire.add-news-component')->layout('layouts.base');
    }
}

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

class ShowNewsComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        $news = News::paginate(16);
        return view('livewire.show-news-component',['news'=>$news])->layout('layouts.base');
    }
}

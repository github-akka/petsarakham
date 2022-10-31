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


class NewsComponent extends Component
{
    use WithPagination;

    public function deleteNews($id)
    {
        $snew = News::find($id);
        if($snew->image)
        {
            unlink('images/news'.'/'.$snew->image);
        }
        $snew->delete();
        session()->flash('message','News  has been Deleted successfully! ');
    }

    public function render()
    {
        $snews = News::where('user_id',Auth::user()->id)->paginate(10);
        return view('livewire.news-component',['snews'=>$snews])->layout('layouts.base');
    }
}

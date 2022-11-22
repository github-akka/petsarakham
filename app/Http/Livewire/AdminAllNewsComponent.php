<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\News;
use Illuminate\Support\Facades\Auth;

class AdminAllNewsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $news = News::paginate(10);
        return view('livewire.admin-all-news-component', ['news' => $news])->layout('layouts.base');
    }
}

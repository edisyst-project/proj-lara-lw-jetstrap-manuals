<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class Filter extends Component
{
    use WithPagination;

    public $searchQuery;
    public $currentPage = 1;


    public function render()
    {
        $users = User::where(function($query) {
            $query->where('name', 'like', '%'.$this->searchQuery.'%')
                ->orWhere('email', 'like', '%'.$this->searchQuery.'%');
        })
        ->paginate(10);

        return view('livewire.user.filter', [
            'users' => $users
        ]);
    }

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];

        Paginator::currentPageResolver(function () {
            return $this->currentPage;
        });
    }
}

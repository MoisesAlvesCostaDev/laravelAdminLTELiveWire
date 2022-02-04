<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;


class Index extends Component
{

    use WithPagination;

    public $search;

    public function render()
    {


        $users = User::where('name', 'like',  "%{$this->search}%")
            ->orderBy('id', 'asc')
            ->paginate(25);

        return view('livewire.admin.user.index', ['users' => $users]);
    }
}

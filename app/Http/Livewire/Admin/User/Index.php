<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;


class Index extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.admin.user.index', ['users' => User::paginate(10)]);
    }

}

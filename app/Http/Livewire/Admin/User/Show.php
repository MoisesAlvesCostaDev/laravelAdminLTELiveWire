<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Show extends Component
{

    public $userIdParam;

    public function mount($userId)
    {
        $this->userIdParam = $userId;
    }

    public function render()
    {

        $user = User::query()->findOrFail($this->userIdParam);
        return view('livewire.admin.user.show', ['user' => $user]);
    }
}

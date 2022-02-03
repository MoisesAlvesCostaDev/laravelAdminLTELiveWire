<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Edit extends Component
{
    public $name;
    public $email;
    public $password;
    public $status;


    public $userIdParam;

    public function mount($userId)
    {

        $this->userIdParam = $userId;
    }

    public function updateUser()
    {

        $this->validate(
            [
                'name' => 'required|max:255',
                'email' => "required|email:rfc,dns|unique:users,email," . $this->userIdParam
            ]
        );

        info($this->password);

        User::updated([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        return redirect()->to(route('admin.user.index'));
    }

    public function render()
    {

        $user = User::query()->findOrFail($this->userIdParam);

        $this->name = $user->name;
        $this->email = $user->email;
        $this->status = $user->status;

        return view('livewire.admin.user.edit');
    }
}

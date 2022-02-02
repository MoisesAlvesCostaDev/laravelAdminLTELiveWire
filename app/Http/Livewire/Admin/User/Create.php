<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;

class Create extends Component
{

    public $name;
    public $email;
    public $password;


    protected $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users|max:200'
    ];



    public function storeUser()
    {

        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);
        return redirect()->to(route('admin.user.index'));
    }


    public function render()
    {
        return view('livewire.admin.user.create');
    }
}

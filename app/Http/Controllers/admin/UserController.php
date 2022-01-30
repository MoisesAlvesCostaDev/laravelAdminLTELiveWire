<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Requests\User\StoreRequest;
use Illuminate\Http\Requests\User\UpdateRequest;



class UserController extends Controller
{
    public function index()
    {
        return view('admin.user.index');
    }
}

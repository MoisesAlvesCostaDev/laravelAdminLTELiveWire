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

    public function create()
    {
        return view('admin.user.create');
    }

    public function show($userId)
    {

        return view('admin.user.show');
    }

    public function edit($userId)
    {

        return view('admin.user.edit');
    }
}

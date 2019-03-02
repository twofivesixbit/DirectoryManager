<?php

namespace App\Http\Controllers;

use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = Adldap::search()->users()->sortBy('cn', 'asc')->get();
        return view('users.index', ['users' => $users]);
    }

    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $user = Adldap::user()->create($request->all());
        $group = Adldap::group()->find($request->group_id)->addMember($user);
        return view('users.show', ['user' => $user]);
    }

    public function edit() {
        //
    }

    public function update() {
        //
    }

    public function destroy() {
        //
    }
}

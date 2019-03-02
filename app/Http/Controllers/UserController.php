<?php

namespace App\Http\Controllers;

use Adldap\AdldapInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(AdldapInterface $ldap) {
        $this->ldap = $ldap;
    }

    public function index() {
        $users = $this->ldap->search()->users()->sortBy('cn', 'asc')->get();
        return view('users.index', ['users' => $users]);
    }

    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $user = $this->ldap->user()->create($request->all());
        $group = $this->ldap->group()->find($request->group_id)->addMember($user);
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

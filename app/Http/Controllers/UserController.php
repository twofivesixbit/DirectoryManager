<?php

namespace App\Http\Controllers;

use App\Unit;
use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('users.index', [
            'users' => Adldap::search()->users()->sortBy('cn', 'asc')->get()
        ]);
    }

    public function show() {
        //
    }

    public function create() {
        return view('users.create', [
            'units' => Unit::all()
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'username' => 'required',
            'unit' => '',
            'password' => 'required'
        ]);

        $fullName = $request->first_name . ' ' . $request->last_name;

        $user = Adldap::make()->user([
            'cn' => $fullName,
            'displayName' => $fullName,
            'name' => $fullName,
            'givenName' => $request->first_name,
            'sn' => $request->last_name,
            'userPrincipalName' => $request->username,
        ]);

        $ac = $user->getUserAccountControlObject();
        $ac->accountIsNormal();
        $user->setUserAccountControl($ac);

        $user->setAccountName($request->username);
        $user->save();

        return redirect('/users');
    }

    public function edit() {
        //
    }

    public function update() {
        //
    }

    public function destroy(Request $request) {
        $user = Adldap::search()->where('sAMAccountName', $request->input('username'))->firstOrFail();
        $user->delete();

        return redirect('/users');
    }
}

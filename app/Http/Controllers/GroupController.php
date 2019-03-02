<?php

namespace App\Http\Controllers;

use Adldap\AdldapInterface;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function __construct(AdldapInterface $ldap) {
        $this->ldap = $ldap;
    }

    public function index() {
        $groups = $this->ldap->search()->groups()->sortBy('cn', 'asc')->get();
        return view('groups.index', ['groups' => $groups]);
    }

    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $group = $this->ldap->group()->create($request->all());
        return view('groups.show', ['group' => $group]);
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

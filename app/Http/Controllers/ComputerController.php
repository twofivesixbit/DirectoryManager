<?php

namespace App\Http\Controllers;

use Adldap\AdldapInterface;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function __construct(AdldapInterface $ldap) {
        $this->ldap = $ldap;
    }

    public function index() {
        $computers = $this->ldap->search()->computers()->sortBy('cn', 'asc')->get();
        return view('computers.index', ['computers' => $computers]);
    }

    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store() {
        //
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

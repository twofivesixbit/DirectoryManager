<?php

namespace App\Http\Controllers;

use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index() {
        $computers = Adldap::search()->computers()->sortBy('cn', 'asc')->get();
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

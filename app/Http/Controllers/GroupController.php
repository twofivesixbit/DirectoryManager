<?php

namespace App\Http\Controllers;

use Adldap\Laravel\Facades\Adldap;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() {
        $groups = Adldap::search()->groups()->sortBy('cn', 'asc')->get();
        return view('groups.index', ['groups' => $groups]);
    }

    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $group = Adldap::group()->create($request->all());
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

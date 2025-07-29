<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $staff = Role::where('name', 'staff')->first()->users;
        return view('admin.ifa-admin-all-staff', compact('staff'));
    }

    public function staff($id)
    {
        $staff = User::find($id)->with('policy')->first();
        return view('admin.ifa-admin-edit-staff', compact('staff'));
    }
}

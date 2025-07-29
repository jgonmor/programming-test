<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Policy;
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
        $staff = User::with('policy')->find($id);
        $unasignedPolicy = Policy::where('user_id', null)->get();
        return view('admin.ifa-admin-edit-staff', compact('staff', 'unasignedPolicy'));
    }

    public function policy($id)
    {
        $policy = Policy::find($id);
        return view('admin.ifa-admin-edit-policy', compact('policy'));
    }

    public function policyRemove($id)
    {
        $policy = Policy::find($id);
        $policy->user_id = null;
        $policy->save();
        return  response()->json(['success' => true]);
    }

    public function policyAssign($id, $staff_id)
    {
        $policy = Policy::find($id);
        $policy->user_id = $staff_id;
        $message = $policy->save();
        return  response()->json([
            'success' => true,
            'message' => $message,
            'policy' => $policy
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index($user_id)
    {
        $policies = Policy::where('user_id', $user_id)->get();
        return view('staff.ifa-staff-dashboard', compact('policies'));
    }

    public function viewPolicy($id)
    {
        $policy = Policy::find($id);
        return view('staff.ifa-staff-view-policy', compact('policy'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Policy;
use Illuminate\Http\Request;
use App\Http\Services\InvitationService;

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

    public function createStaff(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255',
        ]);

        $invitationService = new InvitationService();

        if ($invitationService->sendInvitation($validated['email'], $validated['name'])) {
            return redirect()->back()->with('success', 'Invitation sent successfully.');
        }

        return redirect()->back()->with('error', 'Invitation failed.');
    }

    public function staffUpdate(Request $request, $id)
    {
        $staff = User::findOrFail($id);
        $validated = $request->validate([
            'firstname' => 'required|string|max:255',
        ]);
        $staff->name = $validated['firstname'];
        $message = $staff->save();
        return  response()->json([
            'success' => true,
            'message' => $message
        ]);
    }

    public function staffRemove($id)
    {
        $staff = User::find($id);
        Policy::where('user_id', 2)->update(['user_id' => null]);
        $staff->delete();
        return  response()->json(['success' => true]);
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
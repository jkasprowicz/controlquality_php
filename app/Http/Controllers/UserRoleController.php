<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserRoleController extends Controller
{
    public function showAssignRoleForm()
    {
        $users = User::all();
        return view('/admin/assign-role', ['users' => $users]);
    }
    
    public function assignRole(Request $request)
    {
        $userId = $request->input('user_id');
        $roleId = $request->input('role');
    
        $user = User::find($userId);
    
        if (!$user) {
            // Handle case where user is not found
            return redirect()->back()->with('error', 'User not found.');
        }
    
        $role = Role::where('name', $roleId)->first();
    
        if (!$role) {
            // Handle case where role is not found
            return redirect()->back()->with('error', 'Role not found.');
        }
    
        $user->assignRole($role);
    
        return redirect()->back()->with('success', 'Role assigned successfully.');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\permissionRoleModel;
use App\Models\roleModel;
use App\Models\User;
use Illuminate\Http\Request;

use Hash;
use Auth;

class UserController extends Controller
{
    public function user_list()
    {
        try {
            $PermissionRole = permissionRoleModel::getPermission('User', Auth::user()->role_id);
            if (empty($PermissionRole)) {
                abort(400, 'Permission denied.');
            }
        } catch (\Exception $e) {
            abort(500, 'An error occurred while checking permission: ' . $e->getMessage());
        }


        $data['permissionAdd'] = permissionRoleModel::getPermission('Add User', Auth::User()->role_id);
        $data['permissionEdit'] = permissionRoleModel::getPermission('Edit User', Auth::User()->role_id);
        $data['permissionDelete'] = permissionRoleModel::getPermission('Delete User', Auth::User()->role_id);
//        dd($data);
        $data['getRecord'] = User::getRecord();
        return view('user.listUser', $data);
    }

    public function user_add()
    {
        try {
            $PermissionRole = permissionRoleModel::getPermission('Add User', Auth::user()->role_id);
            if (empty($PermissionRole)) {
                abort(400, 'Permission denied.');
            }
        } catch (\Exception $e) {
            abort(500, 'An error occurred while checking permission: ' . $e->getMessage());
        }

        $data['getRecord'] = roleModel::getRecord();
        return view('user.addUser', $data);
    }

    public function user_insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

        $user = new User();

        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('user_list')->with('success', "User successfully updated");
    }


    public function user_edit($id)
    {
        $data['getRecord'] = User::findOrFail($id);
        $data['getRole'] = roleModel::getRecord();
        return view('user.editUser', $data);
    }


    public function user_update($id, Request $request)
    {

        $user = User::findOrFail($id);

        $user->name = trim($request->name);

        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        }

        $user->role_id = trim($request->role_id);
        $user->save();

        return redirect('user_list')->with('success', "User successfully updated");
    }


    public function user_delete($id)
    {
        $data = User::find($id);

        $data->delete();

        return redirect('user_list')->with('success');
    }

}

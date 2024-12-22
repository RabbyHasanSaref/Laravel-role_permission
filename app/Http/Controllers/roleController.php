<?php

namespace App\Http\Controllers;

use App\Models\permissionRoleModel;
use Illuminate\Http\Request;

use App\Models\roleModel;
use App\Models\permissionModel;
use Auth;

class roleController extends Controller
{
    public function role_list()
    {
        try {
            $PermissionRole = permissionRoleModel::getPermission('Role', Auth::user()->role_id);
            if (empty($PermissionRole)) {
                abort(400, 'Permission denied.');
            }
        } catch (\Exception $e) {
            abort(500, 'An error occurred while checking permission: ' . $e->getMessage());
        }

        $data['permissionAdd'] = permissionRoleModel::getPermission('Role Add', Auth::User()->role_id);
        $data['permissionEdit'] = permissionRoleModel::getPermission('Role Edit', Auth::User()->role_id);
        $data['permissionDelete'] = permissionRoleModel::getPermission('Role Delete', Auth::User()->role_id);
//        dd($data);

        $data['getRecord'] = roleModel::getRecord();

        return view('role.listRole', $data);
    }

    public function role_add()
    {
        try {
            $PermissionRole = permissionRoleModel::getPermission('Role Add', Auth::user()->role_id);
            if (empty($PermissionRole)) {
                abort(400, 'Permission denied.');
            }
        } catch (\Exception $e) {
            abort(500, 'An error occurred while checking permission: ' . $e->getMessage());
        }

        $getPermission = permissionModel::getRecord();
//        dd($getPermission);
        $data['getPermission'] = $getPermission;
        return view('role.addRole', $data);
    }

    public function role_insert(Request $request)
    {
//        dd($request->all());
        $data = new roleModel();
        $data->name = $request->name;
        $data->save();

        permissionRoleModel::InsertUpdateRecord($request->permission_id, $data->id);

        return redirect('role_list')->with('success');
    }

    public function role_edit($id)
    {
        $data['getRecord'] = roleModel::getEditRecord($id);
        $data['getPermission'] = permissionModel::getRecord();
        $data['getRolePermissions'] = permissionRoleModel::getRolePermission($id);
        return view('role.editRole', $data);
    }

    public function role_update(Request $request, $id)
    {
        $data = roleModel::getEditRecord($id);
        $data->name = $request->name;
        $data->save();

        permissionRoleModel::InsertUpdateRecord($request->permission_id, $data->id);


        return redirect('role_list')->with('success');
    }

    public function role_delete($id)
    {
        $data = roleModel::getEditRecord($id);

        $data->delete();

        return redirect('role_list')->with('success');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissionRoleModel extends Model
{
    use HasFactory;

   protected $table = 'permission_role_models';

   static public function InsertUpdateRecord($permission_ids, $role_id){

       permissionRoleModel::where('role_id', '=', $role_id)->delete();

       foreach($permission_ids as $permission_id){
           $data = new permissionRoleModel();
           $data->permission_id = $permission_id;
           $data->role_id = $role_id;
           $data->save();
       }
   }

   static public function getRolePermission($role_id){

       return permissionRoleModel::where('role_id', '=', $role_id)->get();
   }


    static public function getPermission($slug, $role_id) {
        return PermissionRoleModel::select('permission_role_models.id')
            ->join('permission_models', 'permission_models.id', '=', 'permission_role_models.permission_id')
            ->where('permission_role_models.role_id', '=', $role_id)
            ->where('permission_models.slug', '=', $slug)
            ->count();
    }

}

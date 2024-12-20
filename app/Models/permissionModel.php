<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissionModel extends Model
{
    use HasFactory;
    protected $table = 'permission_models';

    protected $fillable = [ 'name', 'slug', 'value'];


    static public function getEditRecord($id){
        return roleModel::find($id);
    }

    static public function getRecord(){
        $getPermission = permissionModel::groupBy('value')->get();

        $result = array();
        foreach ($getPermission as $value)
        {
            $getPermissionGroup = permissionModel::getPermissionGroup($value->value);

            $data = array();
            $data['id'] = $value->id;
            $data['name'] = $value->name;

            $group = array();
            foreach ($getPermissionGroup as $valueG){
                $dataG = array();
                $dataG['id'] = $valueG->id;
                $dataG['name'] = $valueG->name;
                $group[] = $dataG;
            }

            $data['group'] = $group;

            $result[] = $data;
        }
        return $result;
    }

    static public function getPermissionGroup($value){

        return permissionModel::where('value', '=', $value)->get();
    }

}

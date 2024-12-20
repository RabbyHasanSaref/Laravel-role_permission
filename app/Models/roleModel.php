<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roleModel extends Model
{
    use HasFactory;

    protected $table = 'role_models';

    protected $fillable = [ 'name' ];


    static public function getRecord(){
        return roleModel::get();
    }

    static public function getEditRecord($id){
        return roleModel::find($id);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $primaryKey = 'per_id';
    protected $fillable = ['per_id','per_name', 'per_display_name', 'per_parent_id',"key_code"];
    public function  PermissionChildent(){
        return $this->hasMany(Permission::class,'per_parent_id');
    }
}

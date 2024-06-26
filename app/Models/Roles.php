<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use SoftDeletes;
    protected $primaryKey = 'rol_id';
    protected $fillable = ['rol_id', 'rol_name', 'rol_display_name','deleted_at'];
    public function permission(){
        return $this->belongsToMany(Permission::class,'permission_role','role_id','permission_id');
    }
    public function userRole()
    {
        return $this->belongsToMany(User::class, 'role_users', 'user_id', 'role_id')->withTimestamps();
    }
}

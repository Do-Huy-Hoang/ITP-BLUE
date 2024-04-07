<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RoleUser extends Model
{
    use SoftDeletes;
    protected $table = 'role_users';
    protected $primaryKey = 'id';
    protected $fillable = ['id  ','user_id ','role_id ','deleted_at'];

    public function roles(){
        return $this->belongsTo(Roles::class, 'role_id','rol_id');
    }

    public function users(){
        return $this->belongsTo(User::class, 'user_id','id');
    }


    public $timestamps = false;
}

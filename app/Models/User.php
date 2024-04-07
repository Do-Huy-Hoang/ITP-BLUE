<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'us_name',
        'email',
        'password',
        'us_gender',
        'us_birthday',
        'us_phone',
        'us_address',
        'us_img',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'us_email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany(Roles::class,'role_users','user_id','role_id');
    }

    public function rolesUser()
    {
        return $this->hasMany(RoleUser::class, 'user_id','id'); 
    }

    public function checkPermissionAccess($permissionCheck){
        $role = auth()->user()->roles;
        foreach ($role as $roleItem){
            $permission = $roleItem->permission;
            if ($permission ->contains('key_code', $permissionCheck)){
                return true;
            }
            return false;
        }
    }
    public function orders()
    {
        return $this->hasMany(Orders::class, 'user_id')->withTrashed(); 
    }
    public function wishlistItems()
    {
        return $this->belongsToMany(Products::class, 'wishlists', 'user_id', 'product_id')->withTimestamps();
    }
}

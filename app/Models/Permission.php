<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Permission extends Model
{
    protected $guard = [];

    // public function parent()
    // {
    //     return $this->hasMany(Permission::class, 'parent_id');
    // }

    // public function child()
    // {
    //     return $this->hasMany(Permission::class, 'parent_id')->with('child');
    // }
    // public function child()
    // {
    //     // return $this->hasMany(Permission::class, 'parent_id')->with('child')->whereHas('roles',function($q){
    //     //     $q->whereIn('role_id',activeRole());
    //     // });
    // }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
        // ->whereHas('roles',function($q){
        //             $q->whereIn('role_id',activeRole());
        //         });
    }

    // public function imidiateChild()
    // {
    //     return $this->hasMany(Permission::class, 'parent_id');
    // }


    
}

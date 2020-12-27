<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function child()
    {
        return $this->hasMany(Module::class, 'parent_id')->with('child')->whereHas('roles',function($q){
            $q->whereIn('role_id',activeRole());
        });
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class,'module_id');
        // ->with('roles')->whereHas('roles',function($q){
        //     $q->whereIn('role_id',activeRole());
        // });
    }
    
}

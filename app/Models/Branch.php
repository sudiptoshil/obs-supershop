<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = [
        'name_eng', 'name_local', 'address_eng', 'address_local', 'contact_info', 'logo',
            'email', 'status', 'created_by', 'updated_by', 'deleted_by'       
        ];

    public function warehouse()
    {
        return $this->hasMany(Warehouse::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'warehouse_id', 'name_eng', 'name_local', 'address_eng', 'address_local', 
        'contact_info', 'email','status', 'created_by',
        'updated_by', 'deleted_by'   
    ];

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}

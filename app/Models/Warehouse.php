<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = ['branch_id', 'name_eng', 'name_local', 'address_eng', 'address_local', 
        'contact_info', 'email', 'vat_reg_no', 'start_date', 'end_date', 'status', 'created_by',
        'updated_by', 'deleted_by'   
    ];
    
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function store()
    {
        return $this->hasMany(Store::class);
    }
}

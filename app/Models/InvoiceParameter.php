<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceParameter extends Model
{
    protected $fillable = [
            'name','invoice_prefix', 'invoice_gen_type', 'attachment_type', 'back_date_allow_type', 'ref_no_type', 'days',
            'payment_type', 'product_show_type', 'vendor_invoice_type','invoice_des_type','invoice_reason_type', 'range', 'print_view',
            'status', 'created_by', 'updated_by', 'deleted_by'  
        ];

    // public function type()
    // {
    //     return $this->belongsTo(InvoiceType::class, 'invoice_type_id', 'id');
    // }
}

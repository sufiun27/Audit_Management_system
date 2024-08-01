<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit_item extends Model
{
    use HasFactory;

    protected $fillable = [
        'audit_subcategory_id',
        'user_id',
        'audit_name',
        'audit_date',
        'hoplun_concern',
        'document_details',
        'document_link',
        'cap_nc_file',
        'response_file',
        'audit_result',
        'certificate_file',
        'remainder_date',
        'creation',
        'findings',
        'description',
    ];

    public function audit_subcategory()
    {
        return $this->belongsTo('App\Models\audit_subcategory');
    }

    public function audit_category()
    {
        return $this->audit_subcategory->audit_category();
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}

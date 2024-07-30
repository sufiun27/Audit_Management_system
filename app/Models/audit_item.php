<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit_item extends Model
{
    use HasFactory;

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

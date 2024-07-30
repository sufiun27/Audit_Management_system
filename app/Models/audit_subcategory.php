<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit_subcategory extends Model
{
    use HasFactory;

    public function audit_category()
    {
        return $this->belongsTo('App\Models\audit_category');
    }

    public function audit_item()
    {
        return $this->hasMany('App\Models\audit_subcategory');
    }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class audit_category extends Model
{
    use HasFactory;

    public function audit_subcategory()
    {
        return $this->hasMany('App\Models\audit_subcategory');
    }
}

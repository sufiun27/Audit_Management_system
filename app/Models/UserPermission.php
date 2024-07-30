<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'permission_id',
        'status',
    ];

    // UserPermission.php model
public function user()
{
    return $this->belongsTo(User::class);
}

public function permission()
{
    return $this->belongsTo(Permission::class);
}

}

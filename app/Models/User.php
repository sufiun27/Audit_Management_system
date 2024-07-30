<?php

namespace App\Models;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [                
        'password',
        'emp_id',
        'name',
        'designation',
        'remarks',
        'site',
        'email',
        'department',
        'phone',
        'address',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    // protected $hidden = [
    //     'password',
    //     'remember_token',
    // ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // User.php model
    public function permissions()
    {
        return $this->hasMany(UserPermission::class);
    }

    public function userPermissions()
    {
        return $this->hasMany(UserPermission::class, 'user_id', 'id');
    }

    //hasPermission
    public function hasPermission($permission)
    {
        return $this->where('id', auth()->user()->id)
            ->whereHas('userPermissions', function ($query) use ($permission) {
                $query->where('status', 1);
                $query->whereHas('permission', function ($subquery) use ($permission) {
                    $subquery->where('name', $permission);
                });
            
            })
            ->exists();
    }
    


}

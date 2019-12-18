<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
// use Laravel\Passport\HasApiTokens;
use App\Models\Role;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;

class User extends Authenticatable 
{
    use Notifiable;
    // use HasApiTokens;
    use EntrustUserTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'telephone',
        'gender', 'profile_image', 'date_of_birth', 'level',
        'nationality', 'location', 'role', 'occupation', 'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The relationship method for galleries.
     *
     * as galleries.
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * The relationship method for galleries.
     *
     * as galleries.
     */
    public function role()
    {
        return $this->hasMany(Role::class);
    }

    /**
     * The relationship method for galleries.
     *
     * as galleries.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * The relationship method for galleries.
     *
     * as galleries.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }


}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail as MustVerifyEmailContract;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use App\Models\Categories;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Order;
use App\Models\Product;

class User extends Authenticatable implements MustVerifyEmailContract
{
    use EntrustUserTrait;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_notifications', 'role', 
        'profile_image', 'gender', 'date_of_birth', 'telephone', 'nationality', 
        'occupation', 'place_of_work', 'work_address', 'home_address', 'bio', 'status',
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
     * The relationship method with categories.
     */
    public function categories()
    {
        return $this->hasMany(Categories::class);
    }

    /**
     * The relationship method for galleries created.
     */
    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    /**
     * The relationship method for images uploaded.
     */
    public function images()
    {
        return $this->hasMany(Image::class);
    }

    /**
     * The relationship method for orders table.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    /**
     * The relationship method for products table.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

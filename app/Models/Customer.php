<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class Customer extends Authenticatable
{
    use HasFactory, HasApiTokens, SoftDeletes;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['dni', 'email', 'name', 'last_name', 'address', 'id_reg', 'id_com', 'date_reg', 'status'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'status' => 'A',
    ];

    /**
     * Get the commune associated with the user.
     */
    public function commune()
    {
        return $this->hasOne(Commune::class, 'id_com');
    }

    /**
     * Get the region associated with the user.
     */
    public function region()
    {
        return $this->hasOne(Region::class, 'id_reg');
    }

}

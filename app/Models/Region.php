<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_reg';

    /**
     * Get the communes for the blog post.
     */
    public function communes()
    {
        return $this->hasMany(Commune::class, 'id_reg', 'id_reg');
    }
}

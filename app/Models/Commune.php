<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_com';

    /**
 * Get the region that owns the comment.
 */
public function region()
{
    return $this->belongsTo(Region::class, 'id_reg');
}
}

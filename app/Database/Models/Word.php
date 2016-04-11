<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Word
 *
 * @package App\Database\Models
 */
class Word extends Model
{
    /**
     * @var array
     */
    protected $casts = [
        'count' => 'int'
    ];
}

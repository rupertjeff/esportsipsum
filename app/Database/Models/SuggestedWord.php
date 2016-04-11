<?php

namespace App\Database\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SuggestedWord
 *
 * @package App\Database\Models
 */
class SuggestedWord extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['word'];

    /**
     * @var array
     */
    protected $casts = [
        'count' => 'int'
    ];
}

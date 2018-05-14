<?php

namespace Btybug\Framework\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Versions
 * @package Btybug\Framework\Models
 */
class Versions extends Model
{
    protected $table = 'versions';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];
}

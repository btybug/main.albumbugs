<?php

namespace Btybug\btybug\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Hook
 * @package Btybug\btybug\Models
 */
class Hook extends Model
{
    /**
     * @var string
     */
    protected $table = 'hooks';
    protected $fillable = ["id","name","data","type"];
    /**
     * @var array
     */
    protected $guarded = array('id');

    protected $casts = [
        'data' => 'json'
    ];
}
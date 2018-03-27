<?php namespace Btybug\Uploads\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: edo
 * Date: 08.01.2018
 * Time: 23:10
 */
class AppProduct extends Model
{
    protected $table = 'app_products';

    protected $guarded = ['id'];

    protected $casts = [
        'json_data' => 'json'
    ];

    const statuses = [
        'inactive'  => 0,
        'active' => 1
    ];
}
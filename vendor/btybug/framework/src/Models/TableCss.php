<?php

namespace Btybug\Framework\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Versions
 * @package Btybug\Framework\Models
 */
class TableCss extends Model
{
    protected $table = 'table_css';

    protected $fillable = ["id","slug","html"];
}

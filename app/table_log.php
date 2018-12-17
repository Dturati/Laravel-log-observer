<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class table_log extends Model
{
    protected $connection = 'mysql2';
    protected $table = 'table_log';
    protected $fillable = ['nome'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'sitesettings';
    protected $fillabe = [
        'slug', 'namesetting', 'value', 'type', 'created_at', 'updated_at'
    ];
}

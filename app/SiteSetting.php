<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $table = 'siteSettings';
    protected $fillabe = [
        'slug', 'namesetting', 'value', 'type', 'created_at', 'updated_at'
    ];
}

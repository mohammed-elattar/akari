<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bu extends Model
{
    protected $table = "bu";
    protected $fillable = ['id', 'bu_name','rooms', 'bu_price', 'bu_rent',
        'bu_square', 'bu_type', 'bu_small_disc', 'bu_meta', 
        'bu_langitude', 'bu_latitude', 'bu_large_disc', 'bu_status', 
        'created_at', 'updated_at','user_id','rooms'];
}

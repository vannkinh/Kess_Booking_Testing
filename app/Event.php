<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function shop(){
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    protected $table = "events";

    protected $fillable = [
        'name',
        'floor_id',
        'shop_id',
        'description',
        'image_id',
        'status',
        'created_at',
        'updated_at',
    ];
}

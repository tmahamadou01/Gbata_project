<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //
    protected $fillable = [
        'type_maison', 'piece', 'loyer','commune', 'zone', 'description', 'contact', 'caution', 'agence', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name', 'register', 'company_name', 'description', 'prefix', 'slug', 'address', 'number',
        'complement', 'district', 'state', 'contact', 'phone', 'mobile_phone', 'email', 'delivery_fee'
    ];

    /* Relacionamento 1:1 -> store pertence a UM user => belongsTo */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* Relacionamento 1:N -> store possui MUITOS products => hasMany */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

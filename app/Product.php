<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code', 'name', 'description', 'body', 'slug', 'price', 'discount', 'discount_percentage', 'quantity'];

    /* Relacionamento N:1 -> products pertencem a UMA store => belongsTo */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    /* Relacionamento N:N -> MUITOS products possuem/pertencem MUITAS categories => belongsTo */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}

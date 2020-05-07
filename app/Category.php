<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'slug'];

    /* Relacionamento N:N -> MUITAS categories possuem/pertencem MUITOS products => belongsTo */
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

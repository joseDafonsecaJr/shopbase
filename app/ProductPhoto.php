<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    //
    use HasFactory;

    /**
     * The attributes that are mass assignable
     * @var string[]
     */
    protected $fillable = ['image', 'cover'];

    /**
     * This method makes the 1: N relationship with the product_photos table
     * Este metodo faz o relacionamento  de 1 : N com a tabela product_photos
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

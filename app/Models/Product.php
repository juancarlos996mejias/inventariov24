<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $codigo
 * @property $articulo
 * @property $lote
 * @property $marca
 * @property $rubro
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'codigo' => 'required',
		'articulo' => 'required',
		'lote' => 'required',
		'marca' => 'required',
		'rubro' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo','articulo','lote','marca','rubro','stock'];



}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Griferia extends Model
{
  static $rules = [
    'id' => 'required',
    'codigo' => 'required',
    'articulo' => 'required',
    'marca' => 'required',
    'stock_total' => 'required',
    'almacen_talar' => 'required',
    'almacen_outlet' => 'required',
    'almacen_quilmes' => 'required',

  ];

  protected $table = 'griferias';

  /**
   * Attributes that should be mass-assignable.
   *
     //* @var array
   */
   protected $fillable = ['codigo','articulo','marca','stockTotal','almacenTalar','almacenOutlet','almacenQuilmes'];
}

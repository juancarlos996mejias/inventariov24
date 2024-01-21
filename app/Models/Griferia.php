<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Griferia extends Model
{
  static $rules = [
    
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
   protected $fillable = ['codigo','articulo','marca','stock_Total','almacen_Talar','almacen_Outlet','almacen_Quilmes'];
}

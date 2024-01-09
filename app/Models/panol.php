<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panol extends Model
{
  static $rules = [
    'fecha' => 'required',
    'codigo' => 'required',
    'articulo' => 'required',
    'marca' => 'required',
    'cantidad' => 'required',
  ];

  protected $perPage = 20;

  /**
   * Attributes that should be mass-assignable.
   *
   * @var array
   */
  protected $fillable = ['fecha', 'codigo', 'articulo', 'marca', 'cantidad'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paquete
 *
 * @property $id
 * @property $origen
 * @property $destino
 * @property $confirmed
 * @property $tipo
 * @property $destinatario
 * @property $cliente_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paquete extends Model
{
    
    static $rules = [
		'origen' => 'required',
		'destino' => 'required',
		'tipo' => 'required',
		'destinatario' => 'required',
		'cliente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['origen','destino','confirmed','tipo','destinatario','cliente_id'];



}

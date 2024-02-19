<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Archivo
 *
 * @property $id
 * @property $autor
 * @property $tema
 * @property $recurso
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Archivo extends Model
{
    
    static $rules = [
		'autor' => 'required',
		'tema' => 'required',
		'recurso' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['autor','tema','recurso'];



}

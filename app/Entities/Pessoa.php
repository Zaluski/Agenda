<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 03/01/18
 * Time: 4:12 PM
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $table = 'pessoas';

    protected $fillable = [
        'nome',
        'apelido',
        'sexo'
    ];

    public function telefones()
    {
        return $this->hasMany(Telefone::class);
    }
}
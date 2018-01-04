<?php
/**
 * Created by PhpStorm.
 * User: Rafael
 * Date: 03/01/18
 * Time: 4:14 PM
 */

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $table = 'telefones';

    protected $fillable = [

        'descrição',
        'codpaís',
        'ddd',
        'prefixo',
        'sulfixo'
    ];

    public function getNumeroAttribute()
    {
        return "{$this->codpaís} ({$this->ddd}) {$this->prefixo}-{$this->sulfixo}";
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public function lista()
    {
        return (object) [
          'nome'=> 'Vinicius Leal',
            'tel'=> '7198989794',
            'email'=>'email@email.com',
            'cidade'=>'Lauro de Freitas',
            'bairro'=>'Vila praiana',
            'estado civil'=> 'Casado'

        ];
    }
}

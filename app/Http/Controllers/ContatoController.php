<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Contato;


class ContatoController extends Controller
{
    public function index (){
        $contatos= [
            (object)["nome"=> "Maria", "tel"=> "7512345678"],
            (object)["nome"=> "João", "tel"=> "7512345655"]
        ];

        $contato = new Contato();
        dd($contato->lista());
        return view ('contato.index', compact('contatos'));
    }

    public function criar (Request $req)
    {
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar (){

        return "Esse é o Editar do ContatoController";
    }
}

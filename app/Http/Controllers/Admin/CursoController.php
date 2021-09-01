<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index ()
    {
      $registros = Curso::all();
      return view ('admin.cursos.index', compact('registros'));
    }
    public function adicionar ()
    {
      return view ('admin.cursos.adicionar');
    }
    public function salvar (Request $req1)
    {
      $dados = $req1->all();
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req1->hasFile('imagem')){
        $imagem = $req1->file('imagem');
        $num = rand(111,99);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }
      Curso::create($dados);
      return redirect()-> route('admin.cursos');
    }

    public function editar ($id)
    {
      $registro = Curso::find($id);
      return view('admin.cursos.editar', compact('registro'));
    }
    public function atualizar (Request $req1, $id)
    {
      $dados = $req1->all();
      if(isset($dados['publicado'])){
        $dados['publicado'] = 'sim';
      }else{
        $dados['publicado'] = 'nao';
      }

      if($req1->hasFile('imagem')){
        $imagem = $req1->file('imagem');
        $num = rand(111,99);
        $dir = "img/cursos/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ex;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }
      Curso::find($id)->update($dados);
      return redirect()-> route('admin.cursos');
    }
public function deletar($id)
{
  Curso::find($id)->delete();
  return redirect()-> route('admin.cursos');

}

}

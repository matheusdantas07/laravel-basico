<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contato;

class ContatoController extends Controller
{
    /*
    public function retornaNome(){
        return "Matheus";
        }
        public function listaProdutos(){
            return view('produtos');
        }

    public function ListaContatos(){
        return view('contatos');
    }
    */

    public function index ()
    {
        $contatos = Contato::all();
     
        return view('contato.index', compact('contatos'));
    }
    public function create()
{
    return view('contato.create');
}
public function store(request $request)
{
    // dd($request->all());
    // $contato = new Contato();
    // $contato->nome = $request->nome;
    //  $contato->telefone = $request->telefone;
    //  $contato->save();
    contato::create($request->all());
}
public function edit($id)
{
   // dd($id);
   $contato = Contato::find($id);

   dd($contato->nome);
}

}

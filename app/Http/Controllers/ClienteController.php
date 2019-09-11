<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    public function index()
    {
        $cliente=\App\Cliente::get();
        return view('Cliente.indexCli', compact('cliente'));
    }

   
    public function create()
    {
        return view ('Cliente.createCli');
    }

   
    public function store(Request $request)
    {
         $cliente=new \App\Categoria();
        $cliente->nomcli=$request->get('nomcli');
        $cliente->save();
        return redirect('/cliente')->with('msg','cliente cadastrado mulekote!');
    }

   
    public function edit($codcli)
    {
         $cliente=\App\Cliente::find($codcli);
        return view('cliente.indexCli', compact('cliente'));
    }

   
    public function update(Request $request, $id)
    {
        $cliente=\App\Cliente::find($codcli);
        $cliente->nomcli=$request->get('nomcli');
        $cliente->save();
        return redirect('/cliente')->with('atualizado','Update deu certo mulekote!');
    }

  
    public function destroy($id)
    {
        $cliente = \App\Cliente::find($codcli);
        $cliente->delete();
        return redirect('/cliente')->with('cliEliminada','*thanos snap*');
    }
}

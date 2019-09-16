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
        $cliente=new \App\Cliente();
        $cliente->nomcli=$request->get('nomcli');
        $cliente->cpfcli=$request->get('cpfcli');
        $cliente->endcli=$request->get('endcli');
        $cliente->numcli=$request->get('numcli');
        $cliente->baicli=$request->get('baicli');
        $cliente->cidcli=$request->get('cidcli');
        $cliente->ufcli=$request->get('ufcli');
        $cliente->telcli=$request->get('telcli');
       
        $cliente->save();
        return redirect('/cliente')->with('msg','cliente cadastrado mulekote!');
    }

   
    public function edit($codcli)
    {
         $cliente=\App\Cliente::find($codcli);
        return view('cliente.editCli', compact('cliente'));
    }

   
    public function update(Request $request, $codcli)
    {
        $cliente=\App\Cliente::find($codcli);
        $cliente->nomcli=$request->get('nomcli');
        $cliente->cpfcli=$request->get('cpfcli');
        $cliente->endcli=$request->get('endcli');
        $cliente->numcli=$request->get('numcli');
        $cliente->baicli=$request->get('baicli');
        $cliente->cidcli=$request->get('cidcli');
        $cliente->ufcli=$request->get('ufcli');
        $cliente->telcli=$request->get('telcli');
        $cliente->save();
        return redirect('/cliente')->with('atualizado','Update deu certo mulekote!');
    }

  
    public function destroy($codcli)
    {
        $cliente = \App\Cliente::find($codcli);
        $cliente->delete();
        return redirect('/cliente')->with('cliEliminada','*snap*');
    }
}

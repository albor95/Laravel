<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoFormController extends Controller{
    
    public function index()
    {
        $produto=\App\Produto::get();
        return view('Produto.indexPro', compact('produto'));
    }

   
    public function create()
    {
        return view ('Produto.createPro');
    }

    public function store(Request $request)
    {
        $produto=new \App\Produto();
        $produto->nompro=$request->get('nompro');
        $produto->despro=$request->get('despro');
        $produto->vlrpro=$request->get('vlrpro');
        $produto->codcat=$request->get('codcat');
       
        $produto->save();
        return redirect('/produtos')->with('msg','Produto cadastrado mulekote!');
    }

   
    public function edit($codpro)
    {
         $produto=\App\Cliente::find($codcli);
        return view('produto.editPro', compact('produto'));
    }

   
    public function update(Request $request, $codpro)
    {
       
        $produto=\App\Produto::find($codpro);
        $produto->nompro=$request->get('nompro');
        $produto->despro=$request->get('despro');
        $produto->vlrpro=$request->get('vlrpro');
        $produto->codcat=$request->get('codcat');
        $produto->save();
        return redirect('/produtos')->with('atualizado','Update deu certo mulekote!');
    }

  
    public function destroy($codpro)
    {
        $produto = \App\produto::find($codpro);
        $produto->delete();
        return redirect('/produtos')->with('proEliminada','*snap*');
    }
}

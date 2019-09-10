<?php



namespace App\Http\Controllers;
use App\Util\LogConsulta;
use Illuminate\Http\Request;

class CategoriaController extends Controller {
    public function index() {
        $categoria=\App\Categoria::get();
        return view('categoria.index', compact('categoria'));
    }
    
    public function create(){
        return view ('categoria.create');
    }
    
    public function store(Request $request) {
        $categoria=new \App\Categoria();
        $categoria->nomcat=$request->get('nomcat');
        $categoria->save();
        redirect('/categoria');
    }
}

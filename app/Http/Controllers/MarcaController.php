<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    //
    public function create_marca(Request $request)
    {
        
        return view('marcas.create_marca');  // Exibe o formulário para criar a marca
    }
    
    public function add_marca(Request $request)
{
    // Validação: verifica se o campo 'nome_marca' está presente e não está vazio
    $request->validate([
        'nome_marca' => 'required|string|max:255',  // O campo 'nome_marca' é obrigatório e deve ser uma string
    ]);

    // Criar e salvar a nova marca
    $data = new Marca;
    $data->nome_marca = $request->nome_marca;  // Verifique se o nome_marca foi preenchido
    $data->save();

    // Redireciona com uma mensagem de sucesso
    return redirect()->back()->with('success', 'Marca criada com sucesso!');
}



public function list_marca()
    {
        $data = Marca::all();

        return view('marcas.list_marca', compact('data'));
    }


    public function delete_marca($id)
    {
        $data = Marca::find($id);
        $data->delete();
        
        return redirect()->back();
    }


    public function update_marca($id)
    {
        $data = Marca::find($id);

        return view('marcas.update_marca', compact('data'));
    }

    public function edit_marca(Request $request, $id)
    {
        $data = Marca::find($id);

        $data ->nome_marca = $request->title;
        
        $data->save();

        return redirect()->back();
}



public function details_marca($id)
{
    $data = Marca::find($id);

    return view('marcas.details_marca', compact('data'));
}
    
}

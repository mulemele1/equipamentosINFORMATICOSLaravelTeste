<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Local;

class LocalController extends Controller
{
    //
    public function create_local(Request $request)
    {
        
        return view('locals.create_local');  // Exibe o formulário para criar a local
    }
    
    public function add_local(Request $request)
{
    // Validação: verifica se o campo 'nome_local' está presente e não está vazio
    $request->validate([
        'nome_local' => 'required|string|max:255',  // O campo 'nome_local' é obrigatório e deve ser uma string
    ]);

    // Criar e salvar a nova local
    $data = new Local;
    $data->nome_local = $request->nome_local;  // Verifique se o nome_local foi preenchido
    $data->save();

    // Redireciona com uma mensagem de sucesso
    return redirect()->back()->with('success', 'local criada com sucesso!');
}



public function list_local()
    {
        $data = Local::all();

        return view('locals.list_local', compact('data'));
    }


    public function delete_local($id)
    {
        $data = Local::find($id);
        $data->delete();
        
        return redirect()->back();
    }


    public function update_local($id)
    {
        $data = Local::find($id);

        return view('locals.update_local', compact('data'));
    }

    public function edit_local(Request $request, $id)
    {
        $data = Local::find($id);

        $data ->nome_local = $request->title;
        
        $data->save();

        return redirect()->back();
}



public function details_local($id)
{
    $data = Local::find($id);

    return view('locals.details_local', compact('data'));
}
}

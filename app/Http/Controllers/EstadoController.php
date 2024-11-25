<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class EstadoController extends Controller
{
     //
     public function create_estado(Request $request)
     {
         
         return view('estados.create_estado');  // Exibe o formulário para criar a estado
     }
     
     public function add_estado(Request $request)
 {
     // Validação: verifica se o campo 'nome_estado' está presente e não está vazio
     $request->validate([
         'nome_estado' => 'required|string|max:255',  // O campo 'nome_estado' é obrigatório e deve ser uma string
     ]);
 
     // Criar e salvar a nova estado
     $data = new Estado;
     $data->nome_estado = $request->nome_estado;  // Verifique se o nome_estado foi preenchido
     $data->save();
 
     // Redireciona com uma mensagem de sucesso
     return redirect()->back()->with('success', 'estado criada com sucesso!');
 }
 
 
 
 public function list_estado()
     {
         $data = Estado::all();
 
         return view('estados.list_estado', compact('data'));
     }
 
 
     public function delete_estado($id)
     {
         $data = Estado::find($id);
         $data->delete();
         
         return redirect()->back();
     }
 
 
     public function update_estado($id)
     {
         $data = Estado::find($id);
 
         return view('estados.update_estado', compact('data'));
     }
 
     public function edit_estado(Request $request, $id)
     {
         $data = Estado::find($id);
 
         $data ->nome_estado = $request->title;
         
         $data->save();
 
         return redirect()->back();
 }
 
 
 
 public function details_estado($id)
 {
     $data = Estado::find($id);
 
     return view('estados.details_estado', compact('data'));
 }
}

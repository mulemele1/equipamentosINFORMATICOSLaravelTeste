<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sistema;

class SistemaController extends Controller
{
     //
     public function create_sistema(Request $request)
     {
         
         return view('sistemas.create_sistema');  // Exibe o formulário para criar a sistema
     }
     
     public function add_sistema(Request $request)
 {
     // Validação: verifica se o campo 'nome_sistema' está presente e não está vazio
     $request->validate([
         'nome_sistema' => 'required|string|max:255',  // O campo 'nome_sistema' é obrigatório e deve ser uma string
     ]);
 
     // Criar e salvar a nova sistema
     $data = new Sistema;
     $data->nome_sistema = $request->nome_sistema;  // Verifique se o nome_sistema foi preenchido
     $data->save();
 
     // Redireciona com uma mensagem de sucesso
     return redirect()->back()->with('success', 'sistema criada com sucesso!');
 }
 
 
 
 public function list_sistema()
     {
         $data = Sistema::all();
 
         return view('sistemas.list_sistema', compact('data'));
     }
 
 
     public function delete_sistema($id)
     {
         $data = Sistema::find($id);
         $data->delete();
         
         return redirect()->back();
     }
 
 
     public function update_sistema($id)
     {
         $data = Sistema::find($id);
 
         return view('sistemas.update_sistema', compact('data'));
     }
 
     public function edit_sistema(Request $request, $id)
     {
         $data = Sistema::find($id);
 
         $data ->nome_sistema = $request->title;
         
         $data->save();
 
         return redirect()->back();
 }
 
 
 
 public function details_sistema($id)
 {
     $data = Sistema::find($id);
 
     return view('sistemas.details_sistema', compact('data'));
 }
}

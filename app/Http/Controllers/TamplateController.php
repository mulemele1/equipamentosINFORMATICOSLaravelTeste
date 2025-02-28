<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Local;
use App\Models\Marca;
use App\Models\Sistema;
use App\Models\Maquina;
use Illuminate\Http\Request;

class TamplateController extends Controller
{
    // Página inicial
    public function index()
    {
        return view('frontend.home');
    }

    // Logout
    public function logout()
    {
        return view('frontend.logout');
    }

    // Home
    public function home()
    {
        return view('frontend.home');
    }

    // Criar máquina
    public function create_maquina()
    {
        $marcas = Marca::all(['id', 'nome_marca']);
        $locals = Local::all(['id', 'nome_local']);
        $estados = Estado::all(['id', 'nome_estado']);
        $sistemas = Sistema::all(['id', 'nome_sistema']);

        return view('frontend.create_maquina', compact('marcas', 'locals', 'estados', 'sistemas'));
    }

    // Adicionar máquina
    public function add_maquina(Request $request)
{
    // Validação dos dados do formulário
    $validatedData = $request->validate([
        'numero_da_maquina' => 'required|string|max:255',
        'marca_id' => 'required|exists:marcas,id',
        'modelo' => 'required|string|max:255',
        'serial_number' => 'required|string|max:255',
        'carregador' => 'required|string|max:255',
        'disco' => 'required|string|max:255',
        'memoria' => 'required|string|max:255',
        'sis_operacional_id' => 'required|exists:sistemas,id',
        'processador' => 'required|string|max:255',
        'local_id' => 'required|exists:locals,id',
        'estado_id' => 'required|exists:estados,id',
        'projeto' => 'nullable|string|max:255',
        'atribuido_a' => 'nullable|string|max:255',
        'ano_de_aquisicao' => 'nullable|date',
    ]);

    // Cria uma nova máquina com os dados validados
    Maquina::create($validatedData);

    // Redireciona para a página de visualização de máquinas com uma mensagem de sucesso
    return redirect()->route('view_maquina')->with('success', 'Máquina adicionada com sucesso!');
}

    // Visualizar máquinas
    public function view_maquina()
    {
        $data = Maquina::with(['marca', 'local', 'estado', 'sis_operacional'])->get();

        return view('frontend.view_maquina', compact('data'));
    }

    // Deletar máquina
    public function delete_maquina($id)
    {
        $data = Maquina::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Equipamento não encontrado.');
        }

        $data->delete();

        return redirect()->back()->with('success', 'Equipamento deletado com sucesso.');
    }

    // Atualizar máquina - formulário
    public function update_maquina($id)
    {
        $data = Maquina::find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Equipamento não encontrado.');
        }

        $marcas = Marca::all(['id', 'nome_marca']);
        $locals = Local::all(['id', 'nome_local']);
        $estados = Estado::all(['id', 'nome_estado']);
        $sistemas = Sistema::all(['id', 'nome_sistema']);

        return view('frontend.update_maquina', compact('data', 'marcas', 'locals', 'estados', 'sistemas'));
    }

    // Editar máquina
    public function edit_maquina(Request $request, $id)
    {
        $data = Maquina::find($id);

        if (!$data) {
            return redirect()->route('frontend.view_maquina')->with('error', 'Equipamento não encontrado.');
        }

        $validatedData = $request->validate([
            'numero_da_maquina' => 'required|string|max:255',
            'marca_id' => 'required|exists:marcas,id',
            'modelo' => 'required|string|max:255',
            'serial' => 'required|string|max:255',
            'carregador' => 'required',
            'disco' => 'required|string|max:255',
            'memoria' => 'required|string|max:255',
            'sis_operacional_id' => 'required|exists:sistemas,id',
            'processador' => 'required|string|max:255',
            'local_id' => 'required|exists:locals,id',
            'estado_id' => 'required|exists:estados,id',
            'projecto' => 'nullable|string|max:255',
            'atribuido' => 'nullable|string|max:255',
            'ano_de_aquisicao' => 'nullable',
        ]);

        $data->update($validatedData);

        return redirect()->route('frontend.view_maquina')->with('success', 'Máquina atualizada com sucesso!');
    }

    // Detalhes da máquina
    public function details_maquina($id)
    {
        $data = Maquina::with(['marca', 'local', 'estado', 'sis_operacional'])->find($id);

        if (!$data) {
            return redirect()->back()->with('error', 'Equipamento não encontrado.');
        }

        return view('frontend.details_maquina', compact('data'));
    }
}

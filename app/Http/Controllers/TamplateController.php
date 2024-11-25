<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use App\Models\Local;
use App\Models\Marca;
use App\Models\Sistema;
use Illuminate\Http\Request;
use App\Models\Maquina;

class TamplateController extends Controller
{
    //
    public function index()
    {
        return view('frontend.home');
    }


    public function logout()
    {
        return view('frontend.logout');
    }

    public function home()
    {
        return view('frontend.home');
    }


    

    // MAQUINA OU EQUIPAMENTO
    public function create_maquina()
    {

        $marcas = Marca::all(['id', 'nome_marca']);
        $locals = Local::all(['id', 'nome_local']);
        $estados = Estado::all(['id', 'nome_estado']);
        $sistemas = Sistema::all(['id', 'nome_sistema']);

        return view('frontend.create_maquina', compact('marcas', 'locals', 'estados', 'sistemas'));
    }

    public function add_maquina(Request $request)
    {
        $data = new Maquina;

        $data->numero_da_maquina = $request->numero;
        $data->marca_id = $request->marca; // Atualizado para marca_id
        $data->modelo = $request->modelo;
        $data->serial_number = $request->serial;
        $data->carregador = $request->carregador;
        $data->disco = $request->disco;
        $data->memoria = $request->memoria;
        $data->sis_operacional_id = $request->sistema; // Atualizado para sis_operacional_id
        $data->processador = $request->processador;
        $data->local_id = $request->local; // Atualizado para local_id
        $data->estado_id = $request->estado; // Atualizado para estado_id
        $data->projeto = $request->projecto;
        $data->atribuido_a = $request->atribuido;
        $data->ano_de_aquisicao = $request->ano;

        $data->save();

        //return redirect()->route('frontend.view_maquina');
        return redirect()->back();
    }

    public function view_maquina()
    {
        $data = Maquina::with(['marca', 'local', 'estado', 'sis_operacional'])->get();

        return view('frontend.view_maquina', compact('data'));
    }

    public function delete_maquina($id)
    {
        // Tenta localizar o equipamento pelo ID
        $data = Maquina::find($id);

        // Verifica se o equipamento existe
        if (!$data) {
            // Redireciona de volta com mensagem de erro
            return redirect()->back()->with('error', 'Equipamento não encontrado.');
        }

        // Realiza a exclusão do equipamento
        $data->delete();

        // Redireciona de volta com mensagem de sucesso
        return redirect()->back()->with('success', 'Equipamento deletado com sucesso.');
    }


    public function update_maquina($id)
    {
        $data = Maquina::find($id); // Carregue o registro pelo ID

        if (!$data) {
            // Redirecione com uma mensagem de erro se o registro não for encontrado
            return redirect()->back()->with('error', 'Equipamento não encontrado.');
        }

        // Carregar as informações adicionais
        $marcas = Marca::all(['id', 'nome_marca']);
        $locals = Local::all(['id', 'nome_local']);
        $estados = Estado::all(['id', 'nome_estado']);
        $sistemas = Sistema::all(['id', 'nome_sistema']);

        // Retornar a view com todas as variáveis necessárias
        return view('frontend.update_maquina', compact('data', 'marcas', 'locals', 'estados', 'sistemas'));
    }


    public function edit_maquina(Request $request, $id)
    {
        // Tenta localizar o equipamento pelo ID
        if (!$data = Maquina::find($id)) {
            return redirect()->route('frontend.view_maquina')->with('error', 'Equipamento não encontrado');
        }


        // Atualiza os dados da máquina com os valores do formulário
        $data->numero_da_maquina = $request->numero;
        $data->marca_id = $request->marca_id; // Corrigido para 'marca_id'
        $data->modelo = $request->modelo;
        $data->serial_number = $request->serial;
        $data->carregador = $request->carregador;
        $data->disco = $request->disco;
        $data->memoria = $request->memoria;
        $data->sis_operacional_id = $request->sis_operacional_id; // Corrigido para 'sis_operacional_id'
        $data->processador = $request->processador;
        $data->local_id = $request->local_id; // Corrigido para 'local_id'
        $data->estado_id = $request->estado_id; // Corrigido para 'estado_id'
        $data->projeto = $request->projecto;
        $data->atribuido_a = $request->atribuido;
        $data->ano_de_aquisicao = $request->ano;


        $data->update($request->all());

        // Carregar as informações adicionais
        $marcas = Marca::all(['id', 'nome_marca']);
        $locals = Local::all(['id', 'nome_local']);
        $estados = Estado::all(['id', 'nome_estado']);
        $sistemas = Sistema::all(['id', 'nome_sistema']);

        // Retornar a view com todas as variáveis necessárias
        return view('frontend.update_maquina', compact('data', 'marcas', 'locals', 'estados', 'sistemas'));
    }



    public function details_maquina($id)
    {
        $data = Maquina::with(['marca', 'local', 'estado', 'sis_operacional'])->find($id);

        return view('frontend.details_maquina', compact('data'));
    }


    public function details2_maquina(Request $request, $id)
    {
        $data = Maquina::find($id);

        $data->numero_da_maquina = $request->title;
        $data->marca = $request->marca;
        $data->modelo = $request->modelo;
        $data->serial_number = $request->serial;
        $data->carregador = $request->carregador;
        $data->disco = $request->disco;
        $data->memoria = $request->memoria;
        $data->sistema_operacional = $request->sistema;
        $data->processador = $request->processador;
        $data->local = $request->local;
        $data->estado = $request->estado;
        $data->projeto = $request->projecto;
        $data->atribuido_a = $request->atribuido;
        $data->ano_de_aquisicao = $request->ano;


        return redirect()->back();
    }
}
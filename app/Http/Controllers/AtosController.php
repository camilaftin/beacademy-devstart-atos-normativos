<?php

namespace App\Http\Controllers;

use App\Models\Atos;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class AtosController extends Controller
{

    public function __construct(Atos $ato)
    {
        $this->model = $ato;
    }



    public function index()
    {
        $atos = Atos::all();
        return view('index', compact('atos'));
    }

    public function show($id)
    {
        if(!$ato = Atos::find($id))
        {
            return redirect()->route('index');
        }
        return view('show', compact('ato'));
    }

    public function criar()
    {
        return view('criar');
    }

    public function store(Request $request)
    {
        /*$ato = new Atos;
        $ato->numero = $request->numero;
        $ato->ano = $request->ano;
        $ato->ementa = $request->ementa;
        $ato->setor = $request->setor;
        $ato->classificacao = $request->classificacao;
        $ato->resposta = $request->resposta;
        $ato->data_envio = $request->data_envio;
        $ato->save();*/

        $data = $request->all();
        $this->model->create($data);

        return redirect()->route('atos.index');

    }

    public function destruir($id)
    {
        if(!$ato = $this->model->find($id))
        {
            return redirect()->route('atos.index');
        }
        $ato->delete();
        return redirect()->route('atos.index');
    }


}
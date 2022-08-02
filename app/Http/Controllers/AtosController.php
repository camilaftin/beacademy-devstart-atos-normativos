<?php

namespace App\Http\Controllers;

use App\Models\Atos;
use App\Http\Requests\StoreUpdateAtosFormRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;
use PDF;


class AtosController extends Controller
{

    public function __construct(Atos $ato)
    {
        $this->model = $ato;
    }

    public function index(Request $request)
    {

        if(($isSearch = request('search') == true)&&($pdf = request('pdf'))){
            
            $atos = $this->model->getAtos(
                $request->search ?? ''
            );

            $pdf_view = PDF::loadView('PDF.pdf_convert', compact('atos'));
            return $pdf_view->download('myPDF.pdf');
        }

        $atos = $this->model->getAtos(
            $request->search ?? ''
        );

        return view('index', compact('atos'));
        
    }

    public function show($id)
    {
        if (!$ato = Atos::find($id)) {
            return redirect()->route('index');
        }
        return view('show', compact('ato'));
    }

    public function criar()
    {
        return view('criar');
    }

    public function store(StoreUpdateAtosFormRequest $request)
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
        $file = $request['image'];
        $path = $file->store('itens', 'public');
        $data['image'] = $path;

        $this->model->create($data);
        return redirect()->route('atos.index');
    }

    public function destruir($id)
    {
        if (!$ato = $this->model->find($id)) {
            return redirect()->route('atos.index');
        }
        $ato->delete();
        return redirect()->route('atos.index');
    }

    public function edit($id)
    {
        if (!$ato = $this->model->find($id)) {
            return redirect()->route('atos.index');
        }
        return view('edit', compact('ato'));
    }

    public function update(StoreUpdateAtosFormRequest $request, $id)
    {
        if (!$ato = $this->model->find($id)) {
            return redirect()->route('atos.index');
        }
        $data = $request->all();
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('itens', 'public');
        }
        $ato->update($data);
        return redirect()->route('atos.index')->with('success', 'Ato atualizado com sucesso!');
    }

    

    
   
}

   

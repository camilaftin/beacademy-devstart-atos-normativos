<?php

namespace App\Http\Controllers;

use App\Models\Atos;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{

    public function __construct(Atos $ato)
    {
        $this->model = $ato;
    }


    public function pdfView(Request $request)
    {
         
        if($isSearch = request('search') == true){
            
            $atos = $this->model->getAtos(
                $request->search ?? ''
            );

            $pdf_view = PDF::loadView('PDF.pdf_convert', compact('atos'));
            return $pdf_view->download('myPDF.pdf');
        }
        
        $atos = Atos::all();        
        return view('index', compact('atos'));


               

    }
    
    /*public function pdfGeneration(Request $request)
    {
        $atos = Atos::all();

        $pdf_view = PDF::loadView('PDF.pdf_convert', compact('atos'));
        
        return $pdf_view->download('myPDF.pdf');

    }*/
}

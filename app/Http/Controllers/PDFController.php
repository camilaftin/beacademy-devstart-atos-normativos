<?php

namespace App\Http\Controllers;

use App\Models\Atos;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function pdfView()
    {
        $atos = Atos::all();
        return view('PDF.pdf_view', compact('atos'));

    }
    
    public function pdfGeneration()
    {

    }
}

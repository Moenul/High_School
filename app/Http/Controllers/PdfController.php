<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Admission;


class PdfController extends Controller
{
    public function generatePdf(Request $request)
    {

        $name = 'Moenul Islam';
        $admission= Admission::findOrFail($request->id);

        $pdf = Pdf::loadView('pdf_gen', compact('name','admission'));


        $pdf->setOption(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        // Render the HTML as PDF
        $pdf->render();

        return $pdf->stream();
        // return $pdf->download('AdmissionForm_'. time() .'.pdf');
    }
}

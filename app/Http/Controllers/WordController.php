<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index(Request $request)
    {
        $name_client = $request->name_client;
        $located = $request->located;
        $number_preorder = $request->number_preorder;
        $type_property = $request->type_property;

        $phpWord = new \PhpOffice\PhpWord\TemplateProcessor('myTemplate.docx');

        $phpWord->setValues([
            'name_client' => $name_client,
            'located' => $located,
            'number_preorder' => $number_preorder,
            'type_property'=> $type_property
        ]);

        $phpWord->saveAs('hasilEdit.docx');

        $downloadLink = url('hasilEdit.docx');
        return redirect()->away($downloadLink);
    }
}

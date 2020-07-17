<?php

namespace App\Http\Controllers;

use App\Negotiators;
use App\Templates;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Settings;
use PhpOffice\PhpWord\TemplateProcessor;


class ContractController extends Controller
{
    public function listTemplates($id)
    {
        $negotiator = Negotiators::find($id);
        return view('contract', ['negotiator' => $negotiator, 'templates' => Templates::all()]);
    }

    public function generatePdf(Request $request)
    {
        $negotiator = Negotiators::find($request->negotiator);
        $template = Templates::find($request->template);

        $archivePath = $template->archive;

        $docContractPath =  $this->insertDataTemplate($archivePath, $negotiator);


        $domPdfPath = base_path( 'vendor/dompdf/dompdf');
        Settings::setPdfRendererPath($domPdfPath);
        Settings::setPdfRendererName('DomPDF');

        $phpWord = IOFactory::load($docContractPath);
        $xmlWriter = IOFactory::createWriter($phpWord , 'PDF');

        $pdfLocation = storage_path('app/'.time().rand().'.pdf');
        $xmlWriter->save($pdfLocation);

        return response()->download($pdfLocation);

    }

    protected function insertDataTemplate($archivePath, $negotiator): string
    {
        $templateProcessor = new TemplateProcessor(storage_path('app/' . $archivePath));

        $templateProcessor->setValues([
            'negotiator_name' => $negotiator->name,
            'negotiator_document' => (string)$negotiator->document,
            'negotiator_sex' => (string)Negotiators::SEX[$negotiator->sex],
            'date' => date('d/m/Y')
        ]);

        $newName = time().rand().'.docx';
        $filePath = storage_path('app/') . $newName;
        $templateProcessor->saveAs($filePath);

        return $filePath;
    }
}

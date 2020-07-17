<?php

namespace App\Http\Controllers;

use App\Templates;
use Illuminate\Http\Request;

class TemplatesController extends Controller
{

    public function index()
    {
        return view('templates', ['templates' =>  $this->model()::all()]);
    }

    public function create()
    {
        return view('forms.templateCreate');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->validationRules());

        $path = $request->file('archive')->store('/templates');
        $validatedData['archive'] = $path;

        $this->model()::create($validatedData);

        return view('templates', ['templates' =>  $this->model()::all()]);
    }

    public function validationRules()
    {
        return [
            'name' => 'required|string|unique:templates,name',
            'archive' => 'required|file|mimes:docx'
        ];
    }

    public function model()
    {
        return Templates::class;
    }

}

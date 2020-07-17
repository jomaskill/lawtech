<?php

namespace App\Http\Controllers;

use App\Negotiators;
use Illuminate\Http\Request;

class NegotiatorsController extends Controller
{

    public function index()
    {
        return view('negotiators', ['negotiators' =>  $this->model()::all()]);
    }

    public function create()
    {
        return view('forms.negotiatorCreate');
    }

    public function store(Request $request)
    {
        $validatedData = $this->validate($request, $this->validationRules());
        $this->model()::create($validatedData);

        return view('negotiators', ['negotiators' =>  $this->model()::all()]);
    }

    public function validationRules()
    {
        return [
            'name' => 'required|string',
            'document' => 'required|string|unique:negotiators,document|size:11',
            'sex' => 'required|in:F,M'
        ];
    }

    public function model()
    {
        return Negotiators::class;
    }
}

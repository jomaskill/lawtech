@extends('layouts.basicLayout')

@section('title', 'Página Inicial')

@section('pageName')

        <div class="jumbotron">
            <h2>Sistema de geração de contratos v1.0</h2>
            <p>Sistema feito como uma prova para o tribunal do consumidor</p>
            <a class="btn btn-primary btn-lg" href="{{ route('negotiators.index') }}">Negociadores</a>
            <a class="btn btn-primary btn-lg" href="{{ route('templates.index') }}">Templates</a>
        </div>
@endsection



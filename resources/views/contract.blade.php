@extends('layouts.basicLayout')

@section('title', 'layout de contratos')

@section('pageName', 'Negociador: '.$negotiator->name)

@section('content')
    <h3><span class="badge badge-secondary">Escolha o template</span></h3>
    @forelse($templates as $template)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$template->name}}
                <form action="{{route('contract.generatePdf', ['template' => $template->id, 'negotiator' =>$negotiator->id])}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <span class="btn btn-light">
                        <button type="submit" class="btn btn-primary">Gerar PDF</button>
                    </span>
                </form>
        </li>
    @empty
        <p>Não existem templates cadastrados.</p>
    @endforelse
@endsection


@extends('layouts.basicLayout')

@section('title', 'Listagem de Negociadores')

@section('pageName', 'Listagem de Negociadores')
@section('content')
    <ul class="list-group">
        @forelse($negotiators as $negotiator)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$negotiator->name}}
                <span class="btn btn-light"> <a href="{{route('contract.listTemplates', $negotiator->id)}}"> Gerar Contrato</a></span>
            </li>
        @empty
            <p>Não existem negociadores cadastrados.</p>
        @endforelse
        <br>
    </ul>

    <br>
    <a class="btn btn-success" href="{{route('negotiators.create')}}">Criar Novo</a>
@endsection

@extends('layouts.basicLayout')

@section('title', 'Listagem de Templates')

@section('pageName', 'Listagem de Templates')
@section('content')
    <ul class="list-group">
        @forelse($templates as $template)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$template->name}}
            </li>
        @empty
            <p>Não existem templates cadastrados.</p>
        @endforelse
        <br>
    </ul>

    <br>
    <a class="btn btn-success" href="{{route('templates.create')}}">Criar Novo</a>
@endsection

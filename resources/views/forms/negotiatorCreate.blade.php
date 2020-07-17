@extends('layouts.basicLayout')

@section('title', 'Novo Negociador')

@section('pageName', 'Novo Negociador')
@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('negotiators.store')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="name">
        </div>
        <div class="form-group">
            <label for="document">CPF</label>
            <input type="text" class="form-control" id="document" name="document" value="document">
        </div>

        <div class="form-group">
            <label for="sex">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="sex" value="M">
                <label class="form-check-label" for="sex">
                    Masculino
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="sex" value="F">
                <label class="form-check-label" for="sex">
                    Feminino
                </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection

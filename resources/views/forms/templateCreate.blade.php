@extends('layouts.basicLayout')

@section('title', 'Novo Template')

@section('pageName', 'Novo Template')
@section('content')

    @if($errors->any())
        <ul class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('templates.store')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Arquivo</label>
            <input type="file" class="form-control-file" id="archive" name="archive" value="archive">
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection

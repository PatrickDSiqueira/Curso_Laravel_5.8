@extends('layouts.principal')
@section('titulo','Clientes - Info')

@section('conteudo')
    <h3>Infomações do Cliente</h3>
<p>ID: {{$cliente['id']}}</p>
<p>Nome: {{$cliente['nome']}}</p>
<br>

<a href="{{route('clientes.index')}}">Voltar</a>

@endsection

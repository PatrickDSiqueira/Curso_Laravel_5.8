@extends('layouts.principal')
@section('titulo','Departamentos')

@section('conteudo')
    <h3>
        Departamentos
    </h3>

    <ul>
        <li>Computadores</li>
        <li>Acessórios</li>
        <li>Eletrônicos</li>
        <li>Roupas</li>
    </ul>

@component('componentes.alerta')
@endcomponent
@endsection

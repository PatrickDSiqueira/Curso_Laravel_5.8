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

    @component('componentes.alerta',['titulo' => 'Erro Fatal', 'tipoAlerta'=>'info'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endcomponent

    @component('componentes.alerta',['titulo' => 'Erro Fatal', 'tipoAlerta'=>'error'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endcomponent
    @component('componentes.alerta',['titulo' => 'Erro Fatal', 'tipoAlerta'=>'success'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endcomponent

    @component('componentes.alerta',['titulo' => 'Erro Fatal', 'tipoAlerta'=>'warning'])
        <p><strong>Erro Inesperado</strong></p>
        <p>Ocorreu um erro inesperado</p>
    @endcomponent
@endsection
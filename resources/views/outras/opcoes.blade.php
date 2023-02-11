@extends('layouts.principal')
@section('titulo','Opcoes')
@section('conteudo')
    <div class="options">
        <ul>
            <li><a class=" warning {{request()->is('opcoes/1')?'selected':'warning'}}" href="{{route('opcoes',1)}}">warning</a>
            </li>
            <li><a class="info {{request()->is('opcoes/2')?'selected':''}}" href="{{route('opcoes',2)}}">info</a>
            </li>
            <li><a class="success {{request()->is('opcoes/3')?'selected':''}}" href="{{route('opcoes',3)}}">success</a>
            </li>
            <li><a class="error {{request()->is('opcoes/4')?'selected':''}}" href="{{route('opcoes',4)}}">error</a>
            </li>
        </ul>
    </div>

    @if(isset($opcao))
        @switch($opcao)
            @case(1)
                @alerta(['titulo' => 'Erro Fatal', 'tipoAlerta'=>'warning'])
                <p><strong>Warning</strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalerta
                @break
            @case(2)
                @alerta(['titulo' => 'Erro Fatal', 'tipoAlerta'=>'info'])
                <p><strong>Info</strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalerta
                @break
            @case(3)
                @alerta(['titulo' => 'Erro Fatal', 'tipoAlerta'=>'success'])
                <p><strong>Success</strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalerta
                @break
            @case(4)
                @alerta(['titulo' => 'Erro Fatal', 'tipoAlerta'=>'error'])
                <p><strong>Error</strong></p>
                <p>Ocorreu um erro inesperado</p>
                @endalerta
                @break
        @endswitch
    @endif
@endsection

@extends('app.layouts.basico')

@section('titulo', 'Pedido')
    
@section('conteudo')

    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <p>Editar Pedido</p>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('pedido.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto">
                {{$msg ?? ''}}
                <form method="post" action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}" >
                    @csrf
                    @method('PUT')
                    <input type="text" name="nome" value = " {{ $pedido->nome ?? old('nome') }}" placeholder="Nome" class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : ''}}
                    <button type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
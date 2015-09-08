@extends('templates.templatePadrao')

@section('content')
<h1>Testando o Blade Gestão de Post's</h1>

@if(isset($postagem->id))
{{Form::open(array('url' =>"postagem/editar/$postagem->id", 'class' => 'teste'))}}
@else
{{Form::open(array('url' =>'postagem/adicionar', 'class' => 'teste'))}}
@endif

	{{Form::text('titulo', isset($postagem->titulo) ? $postagem->titulo: '', array('placeholder' => 'Titulo'))}}
	{{Form::textarea('conteudo', isset($postagem->conteudo) ? $postagem->conteudo: '', array('placeholder' => 'Conteudo'))}}
	{{Form::submit('Adicionar')}}

{{Form::close()}}
@stop

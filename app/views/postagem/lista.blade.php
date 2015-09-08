@extends('templates.templatePadrao')

@section('content')
<h1>Testando o Blade no lista</h1>
{{HTML::link("postagem/adicionar/", 'Adicionar')}}

<table border="1">
	<tr>
	<th>Nome</th>
	<th>Conteudo</th>
	<th>Ações</th>
	</tr>

	@foreach($postagens as $postagem)
	<tr>
	<td>{{$postagem->titulo}}</td>
	<td>{{$postagem->conteudo}}</td>
	
	<td>
		{{HTML::link("postagem/editar/{$postagem->id}",'Editar')}} /
		{{HTML::link("postagem/deletar/{$postagem->id}",'Deletar')}} 

	</td>
	</tr>
	@endforeach
</table>
@stop

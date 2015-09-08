<?php

class PostagemController extends BaseController{

	public function getIndex(){
		$postagens = PostagemModel::where('id','>',0) -> get();

		return View::make('postagem.lista',compact('postagens'));
	}

	public function getAdicionar(){
		return View::make('postagem.new-edit');
	}	

	public function postAdicionar(){
		$dadosFormulario = Input::all();
		$postagem = new PostagemModel($dadosFormulario);
		$postagem->save();
		return Redirect::to('postagem');
	}

	public function getEditar($id){	
		$postagem = PostagemModel::find($id);
		return 	View::make('postagem.new-edit', compact('postagem'));

	}	

	public function postEditar($id){
		$postagem=PostagemModel::find($id);
		$dadosFormulario = Input::all();
		$postagem->__construct($dadosFormulario);
		$postagem->save();
		return Redirect::to('postagem');


	}

	public function getDeletar($id){
		$postagem=PostagemModel::find($id);
		$postagem->delete();
		return Redirect::to('postagem');
	}

	public function MissingMethod($params = array()){
		return 'sa porra funciona não';
	}
}

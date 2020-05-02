<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
	public function index()
	{

		$usuarioModel = new UsuarioModel();			

		$dados = [
			'usuarios'	=> $usuarioModel->get()->paginate(10),
			'pager'		=> $usuarioModel->pager
		];

		return view('usuarios', $dados);
	}

	//--------------------------------------------------------------------

}

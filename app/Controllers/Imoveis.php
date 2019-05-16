<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Imoveis extends BaseController
{
	public function index()
	{
		echo view('imoveis/imoveisGrid');
	}

	//--------------------------------------------------------------------

}

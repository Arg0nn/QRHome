<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Contato extends BaseController
{
	public function index()
	{
		echo view('header/contato');
	}

	//--------------------------------------------------------------------

}

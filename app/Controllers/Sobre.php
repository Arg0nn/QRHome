<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Sobre extends BaseController
{
	public function index()
	{
		echo view('header/sobre');
	}

	//--------------------------------------------------------------------

}

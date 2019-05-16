<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;

class Users extends BaseController
{
    protected $session;

    // ==================================================
    public function __construct(){
        $this->session = session();
    }


    // ==================================================
	public function index()
	{
        // check if there is an active session
        if($this->checkSession()){
            // active session
            $this->homePage();
        } else {
            // show login form
            $this->login();
        }
    }
    
    // ==================================================
    public function login(){

        // check if session exists (if yes - GoTo homepage)
        if($this->checkSession()){
            $this->homePage();
            return;
        }

        $error = '';
        $data = array();
        $request = \Config\Services::request();

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            // check fields
            $username = $request->getPost('text_username');
            $password = $request->getPost('text_password');
            if($username == '' || $password == ''){
                $error = "Preencha os campos";
            }

            // check database
            if($error == ''){
                $model = new UsersModel();
                $result = $model->verifyLogin($username, $password);
                if(is_array($result)){
                    // valid login
                    $this->setSession($result);
                    $this->homePage();
                    return;
                } else {
                    // invalid login
                    $error = "Login inválido";
                }
            }
        } 
        if($error != ''){
            $data['error'] = $error;
        }

        // show the login page
        echo view('users/login', $data);

    }

    // ==================================================
    private function setSession($data){
        // init session
        $session_data = array(
            'id_user' => $data['id_user'],
            'name' => $data['name']
        );

        $this->session->set($session_data);
    }

    // ==================================================
    public function homePage(){

        // check if session exists
        if(!$this->checkSession()){
            $this->login();
            return;
        }

        // show homepage view
        echo view('users/homepage');
    }
    // ==================================================
    public function logout(){
        // logout

        $this->session->destroy();
        return redirect()->to(site_url('users'));
    }

    // ==================================================
    private function checkSession(){
        // check if session exists
        return $this->session->has('id_user');
    }

    // ==================================================
    public function recover(){
        // shows form to recover password
        echo view('users/recover_password');
    }

}

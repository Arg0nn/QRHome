<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UsersModel;
use Tests\Support\Models\UserModel;

class Users extends BaseController
{
    protected $session;

    // ==================================================
    public function __construct(){
        $this->session = session();
    }

    // ==================================================
	public function index(){
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
            'name' => $data['name'],
            'username' => $data['username'],
            'profile' => $data['profile']

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

        // check if user is admin
        $data = array();
        if($this->checkProfile('admin')){
            $data['admin'] = true;
        }

        // show homepage view
        echo view('users/homepage', $data);
    }

    // ==================================================
    public function logout(){
        // logout

        $this->session->destroy();
        return redirect()->to(site_url('users'));
    }

    // ==================================================
    public function recover(){
        // shows form to recover password
        echo view('users/recover_password');
    }

    // ==================================================
    public function reset_password(){
        $request = \Config\Services::request();
        $email = $request->getPost('text_email');
        $users = new UsersModel();
        $result = $users->checkEmail($email);
        if(count($result) != 0){
            $users->sendPurl($email, $result[0]['id_user']);

            echo 'existe';
        } else {
            echo 'Não existe o email associado';
        }        
    }

    // ==================================================
    public function redefine_password($purl){
        $users = new UsersModel();
        $results = $users->getPurl($purl);
        if(count($results) == 0){
            // no purl found. Redirect to main
            return redirect()->to(site_url('main'));

        } else {
            $data['user'] = $results[0];
            // show redefine view
            echo view('users/redefine_password', $data);

        }
    }

    // ==================================================
    public function redefine_password_submit(){

        $request = \Config\Services::request();
        $id_user = $request->getPost('text_id_user');
        $nova_password = $request->getPost('text_nova_password');
        $nova_password_repetida = $request->getPost('text_repetir_password');

        $error = '';

        // verify if both passwords match
        if($nova_password != $nova_password_repetida){
            $error = "As senhas não são iguais";
            die($error);
        }

        // updates the new passwords
        if($error == ''){
            $users = new UsersModel();
            $users->redefinePassword($id_user, $nova_password);
        }

    }

    // ==================================================
    //      PRIVATE
    // ==================================================
    private function checkSession(){
        // check if session exists
        return $this->session->has('id_user');
    }

    // ==================================================
    private function checkProfile($profile){
        // check if the user has permission to access feature
        if(preg_match("/$profile/",$this->session->profile)){
            return true;
        } else{
            return false;
        }
    }

    // ==================================================
    public function admin_users(){
        // check if the user has permission
        if($this->checkProfile('admin') == false){
            return redirect()->to(site_url('users'));
        }

        $users = new UsersModel();
        $results = $users->getUsers();
        $data['users'] = $results;

        echo view('users/admin_users', $data);
    }

	// =====================================================
	public function admin_new_user(){
		
		// check if session exists (if yes goto homepage)
		if(!$this->checkSession()){
			$this->homePage();
			return;
		}

		// check if the user has permission
		if($this->checkProfile('admin') == false){
			return redirect()->to(site_url('users'));
		}

		// adds a new user to the database
		$error = '';
		$data = array();
		
		// if there was a submission
		if($_SERVER['REQUEST_METHOD'] == 'POST'){

			// ir buscar os dados do post
			$request = \Config\Services::request();
			$dados = $request->getPost();
			
			// verifica se vieram os dados corretos
			if(
				$dados['text_username'] == '' ||
				$dados['text_password'] == '' ||
				$dados['text_password_repetir'] == '' ||
				$dados['text_name'] == '' ||
				$dados['text_email'] == ''
			){
				$error = 'Preencha todos os campos de texto.';
			}

			// verificar se as password coincidem
			if($error == ''){
				if($dados['text_password'] != $dados['text_password_repetir']){
					$error = 'As passwords não coincidem.';
				}
			}

			if($error == ''){
				// verifica se, pelo menos, uma check de profile foi checkada
				if(	!isset($dados['check_admin']) &&
					!isset($dados['check_moderator']) &&
					!isset($dados['check_user'])){
						$error = 'Indique, pelo menos, um tipo de profile.';
					}
			}

			// verificar se já existe um user com o mesmo username ou email			
			$model = new UsersModel();
				if($error == ''){
				$result = $model->checkExistingUser();
				if(count($result)!=0){
					$error = "Já existe um utilizador com esses dados.";
				}
			}

			if($error == ''){								
				$model->addNewUser();								
				return redirect()->to(site_url('users/admin_users'));
			}			
		}

		// check if there is an error
		if($error != ''){
			$data['error'] = $error;
		}

		echo view('users/admin_new_user', $data);

	}

    // ==================================================
    public function admin_edit_user($id_user){

        $error = '';
        $data = array();

        // if there was a submission
        if($_SERVER['REQUEST_METHOD'] ==  'POST'){
            // handles the submission of user data

            
        }

        // open the frame to user edit
        $users = new UsersModel();

        // verify if there is data
        $user = $users->getUser($id_user);
        if(count($user) == 0 || $user[0]['id_user'] == $this->session->id_user){
            
            return redirect()->to(site_url('users/admin_users'));
        } 

        $data['user'] = $user[0];
        echo view('users/admin_edit_user', $data);
    }
}
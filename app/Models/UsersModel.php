<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $db;

    // ==================================================
    public function __construct(){
        $this->db = db_connect();
    }

    // ==================================================
    public function verifyLogin($username, $password){
        $params = array(
            $username,
            md5(sha1($password))
        );

        $query = "SELECT * FROM users WHERE username = ? AND passwrd = ?";

        $results = $this->db->query($query,$params)->getResult('array');
        
        if(count($results) == 0){
            return false;
        } else {

            // update last_login in the database
            $params = array(
                $results[0]['id_user']
            );
            $this->db->query("UPDATE users SET last_login = NOW() WHERE id_user = ?", $params);

            // returns valid login   
            return $results[0];
        }
    }

    // ==================================================
    public function resetPassword($email){
        // resets the users password

        // check if there is a user with the email
        $params = array(
            $email
        );
        $query = "SELECT id_user FROM users WHERE email = ?";
        $results = $this->db->query($query,$params)->getResult('array');

        if(count($results) != 0){
            // change the user's password
            $newPassword = $this->randomPassword();
            $params = array(
                md5(sha1($newPassword)),
                $results[0]['id_user']
            );
            $query = "UPDATE users SET passwrd = ? WHERE id_user = ?";
            $this->db->query($query,$params);

            // show the new password
            echo '(Mensagem de email)';
            echo 'A sua nova password é: ' . $newPassword;

            return true;
        } else {
            echo 'Não existe esse email registrado';
            return false;
        }

    }

    // ==================================================
    public function checkEmail($email){
        // checks if the email is from a user's account
        $params = array(
            $email
        );
        $query = "SELECT id_user FROM users WHERE email = ?";
        return $this->db->query($query,$params)->getResult('array');
    }

    // ==================================================
    public function sendPurl($email, $id_user){
        $purl = $this->randomPassword(6);
        $params = array(
            $purl,
            $id_user
        );
        $query = "UPDATE users SET purl = ? WHERE id_user = ?";
        $this->db->query($query,$params);

        echo '(mensagem de email) Link para redefinir a sua password:';
        echo '<a href="'.site_url('users/redefine_password/' . $purl).'">Refinir password</a>';

    }

    // ==================================================
    public function getPurl($purl){
        // returns the row with the given purl
        $params = array(
            $purl
        );

        $query = "SELECT id_user FROM users WHERE purl = ?";
        return $this->db->query($query,$params)->getResult('array');
    }

    // ==================================================
    public function redefinePassword($id, $pass){
        $params = array(
            md5(sha1($pass)),
            $id
        );
        $query = "UPDATE users SET passwrd = ? WHERE id_user = ?";
        $this->db->query($query,$params);

        $params = array(
            $id
        );
        // removes the purl from the user
        $this->db->query("UPDATE users SET purl = '' WHERE id_user = ?", $params);

    }

    // ==================================================
    public function getUsers(){
        // return all users in the database
        $query = "SELECT * FROM users";
        return $this->db->query($query)->getResult('array');

    }

    // ==================================================
    private function randomPassword($numChars = 8){
        // generates a random password
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        return substr(str_shuffle($chars),0,$numChars);
    }
}

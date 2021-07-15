<?php

class accountModel extends database{

    public function checkEmail($email){

        if($this->Query("SELECT email FROM users WHERE email = ?", [$email])) {

            if($this->rowCount() > 0) {
                return false;
            }else {
                return true;
            }
        }
    }

    public function createAccount($data){

        if($this->Query("INSERT INTO users (fullname, email, password) VALUES (?,?,?)", $data))
        {
            return true;
        }

    }

    public function userLogin($email, $password){

        if($this->Query("SELECT * FROM users WHERE email = ?", [$email])){
            if($this->rowCount() > 0) {
                
                $row = $this->fetch();
                $dbpassword = $row->password;
                $userid = $row->id;
                if(password_verify($password, $dbpassword)){

                    return ['status' => 'ok', 'data' => $userid];

                }else{
                    return ['status' => 'passwordnotMatch'];
                }

            }else{
                return ['status' => 'emailNotfound'];
            }
        }

    }

}


?>
<?php

class accountController extends framework{

    public function __construct(){
        if($this->getSession('userid')){

            $this->redirect("profile");
        }
        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
    }
    public function index(){
        $this->view("signup");
    }

    public function createAccount(){

        $userData = [
            'fullname' => $this->input('fullname'),
            'email' => $this->input('email'),
            'password' => $this->input('password'),
            'fullnameError' => '',
            'emailError' => '',
            'passwordError' => ''

        ];
        if(empty($userData['fullname'])) {

            $userData['fullnameError'] = 'FullName is required';
           
        }
        if(empty($userData['email'])) {

            $userData['emailError'] = 'Email is required';
           
        } else {
            if(!$this->accountModel->checkEmail($userData['email'])){

                $userData['emailError'] = "Sorry this email is alredy exist";

            }
        }

        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is Required";

        }elseif(strlen($userData['password']) < 5 ){

            $userData['passwordError'] = "Password must be 5 Characters long";

        }


            if(empty($userData['fullnameError']) && empty($userData['emailError']) && empty($userData['passwordError'])) {
              
                $password = password_hash($userData['password'], PASSWORD_DEFAULT);
                $data = [$userData['fullname'], $userData['email'], $password];
                if($this->accountModel->createAccount($data)) 
                {
                    $this->setFlash("accountCreated", "Your account has been created successfully");
                    
                    $this->redirect("accountController/loginForm");
                }

            }else {
                $this->view('signup', $userData);
            }


    }

    public function loginForm(){
        $this->view("login");
    }

    public function userLogin(){

        $userData = [
            'email' => $this->input('email'),
            'password'=> $this->input('password'),
            'emailError' => '',
            'passwordError' => ''
        ];

        if(empty($userData['email'])){
            $userData['emailError'] = "Email is required";

        }
        if(empty($userData['password'])){
            $userData['passwordError'] = "Password is required";

        }

        if(empty($userData['emailError']) && empty($userData['passwordError'])){

          $result = $this->accountModel->userLogin($userData['email'], $userData['password']);

            if($result['status'] === 'emailNotfound'){
                $userData['emailError'] = "Sorry invaild email";
                $this->view("login", $userData);
            }else if($result['status'] === 'passwordnotMatch') {
                $userData['passwordError'] = "Sorry invaild Password";
                $this->view("login", $userData);
            }else if($result['status'] === 'ok'){
                $this->setSession("userid", $result['data']);
                $this->redirect("profile");
            } 
            
        }else{
            $this->view("login", $userData);
        }


    }
}




?>
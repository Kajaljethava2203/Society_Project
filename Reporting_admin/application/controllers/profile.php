<?php

class profile extends framework{

    public function __construct(){
        if(!$this->getSession('userid')){

            $this->redirect("accountController/loginForm");
        }
        $this->helper("link");
        $this->profileModel = $this->model("profileModel");
    }
    public function index(){
        $userid = $this->getSession('userid');
        $data = $this->profileModel->getData($userid); 

        $this->view("profile",$data);
    }

    
    public function feedbackdata() {

    $userData = [
    'message' =>$this->input('message'),
    'messageError'=> ''
    ];
    
    if(empty($userData['message'])){
    $userData['messageError']= "Message is required";
    }
     
    if(empty($userData['messageError']))
    {
    $data = [$userData['message'],$this->getSession('userid')];
    if($this->profileModel->addfeedback($data))
    {
    $this->setflash('feedbackadded',"Your Feedback has been added successfully");
    $this->redirect("profile/index");
    }
    }
    else
    {
    $this->view("report_feedback",$userData);
    }
    
    }
    

    public function report_feedback($id){

     $userid = $this->getSession('userid');
     $reportEdit = $this->profileModel->edit_data($id, $userid);
     $data = [

       'data'    => $reportEdit,
       'nameError'=> '',
       'contactError'=> '',
       'flatnoError'=> '',
       'titleError'=> '',
       'descriptionError'=> '',

     ];
     $this->view("report_feedback", $data);
    }

    public function status(){
      echo "<h1>working progress</h1>";

    }
  
   
    public function logout(){
        $this->destroy();
        $this->redirect("accountController/loginForm");
    }


}





?>
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

    public function reportForm(){
        $this->view("addReport");
    }

    public function reporting() {

    $userData =[
    'name' =>$this->input('name'),
    'contact'=>$this->input('contact'),
    'flat_no'=>$this->input('flat_no'),
    'title'=>$this->input('title'),
    'description'=>$this->input('description'),
    'nameError'=> '',
    'contactError'=> '',
    'flatnoError'=> '',
    'titleError'=> '',
    'descriptionError'=> '',
    ];
    
    if(empty($userData['name'])){
    $userData['nameError']= "name is required";
    }
    if(empty($userData['contact'])){
    $userData['contactError']= "contact is required";
    }
    if(empty($userData['flat_no'])){
    $userData['flatnoError']= "flat number is required";
    }
    if(empty($userData['title'])){
    $userData['titleError']= "title is required";
    }
    if(empty($userData['description'])){
    $userData['descriptionError']= "description is required";
    }
    
    if(empty($userData['nameError']) && empty($userData['contactError']) && empty($userData['flatnoError']) && empty($userData['titleError']) && empty($userData['descriptionError']))
    {
    $data= [$userData['name'], $userData['contact'], $userData['flat_no'], $userData['title'], $userData['description'],$this->getSession('userid')];
    if($this->profileModel->addReport($data))
    {
    $this->setflash('repportAdded',"Your report has been added successfully");
    $this->redirect("profile/index");
    }
    }
    else
    {
    $this->view("addReport",$userData);
    }
    
    }
    

    public function edit_report($id){

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
     $this->view("edit_report", $data);
    }
  
    public function updatereport(){

      $id = $this->input('hiddenId');
      $userid = $this->getSession('userid');
      $reportEdit = $this->profileModel->edit_data($id, $userid);
      $userData = [

        'name' =>$this->input('name'),
        'contact'=>$this->input('contact'),
        'flat_no'=>$this->input('flat_no'),
        'title'=>$this->input('title'),
        'description'=>$this->input('description'),
        'data'           => $reportEdit,
        'hiddenId'       => $this->input('hiddenId'),
        'nameError'    => '',
        'contactError' => '',
        'flatnoError'  => '',
        'titleError'   => '',
        'descriptionError' => '',
        
 
       ];
       if(empty($userData['name'])){
        $userData['nameError']= "name is required";
        }
        if(empty($userData['contact'])){
        $userData['contactError']= "contact is required";
        }
        if(empty($userData['flat_no'])){
        $userData['flatnoError']= "flat number is required";
        }
        if(empty($userData['title'])){
        $userData['titleError']= "title is required";
        }
        if(empty($userData['description'])){
        $userData['descriptionError']= "description is required";
        }
        
        if(empty($userData['nameError']) && empty($userData['contactError']) && empty($userData['flatnoError']) && empty($userData['titleError']) && empty($userData['descriptionError']))
        {
        $updateData = [$userData['name'], $userData['contact'], $userData['flat_no'], $userData['title'], $userData['description'], $userData['hiddenId'], $userid];

        if($this->profileModel->updateReport($updateData)){

          $this->setFlash('reportUpdated', 'Your fruit record has been updated successfully');
          $this->redirect("profile/index");

        }

       } else {
        $this->view("edit_report", $userData);
       }

    }

    public function delete($id){

      $userid = $this->getSession('userid');
      if($this->profileModel->deleteReport($id, $userid)){
        $this->setFlash('deleted', 'Your fruit has been deleted successfully');
        $this->redirect('profile/index');
      }

    }

    public function logout(){
        $this->destroy();
        $this->redirect("accountController/loginForm");
    }


}





?>
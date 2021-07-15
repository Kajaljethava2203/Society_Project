<?php

class profileModel extends database{

    public function addFeedback($report){
        if($this->Query("INSERT INTO feedback (message,userid) VALUES (?,?)", $report)){
            return true;
        }
    }



    public function getData(){
        
     
       if($this->Query("SELECT * FROM issue")){

        $data = $this->fetchAll();
        return $data;
       }
    }

    public function edit_data($id, $userid){
        if($this->Query("SELECT * FROM issue WHERE id = ? && userid = ? ", [$id, $userid])){

            $row = $this->fetch();
            return $row;
        }

    }

 
}




?>
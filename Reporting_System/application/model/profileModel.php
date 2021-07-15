<?php

class profileModel extends database{

    public function addReport($report){
        if($this->Query("INSERT INTO issue (name, contact, flat_no, title, description, userid) VALUES (?,?,?,?,?,?)", $report)){
            return true;
        }
    }



    public function getData($userid){
        
     
       if($this->Query("SELECT * FROM issue WHERE userid = ? ", [$userid])){

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

    public function updateReport($updateData){

        if($this->Query("UPDATE issue SET name = ?, contact = ?, flat_no = ?, title = ?, description = ? WHERE id = ? AND userid = ? ", $updateData)){

            return true;

        }

    }

    
    public function deleteReport($id, $userid){

        if($this->Query("DELETE FROM issue WHERE id = ? && userid = ? ", [$id, $userid])){
            return true;
        }

    }


}




?>
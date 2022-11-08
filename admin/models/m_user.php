<?php
require_once ("database.php");
class m_user extends database {
    public function insert_user($id,$fist_name,$last_name,$email,$address,$phone_number,$categorie_id,$plant,$status) {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$fist_name,$last_name,$email,$address,$phone_number,$categorie_id,$plant,$status));
    }
//    public function insert_user_class($class_id,$user_id){
//        $sql="INSERT INTO user_class VALUES (?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($class_id,$user_id));
//    }
    public function read_user() {
        $sql = "select * from user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_status($status){
        $sql = "select * from user where status=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($status));
    }

    public function read_user_detail($id) {
        $sql = "select trainers.trainer_name AS trainers_name,class.time AS time_,class.day_ as day_ from user_class
                inner join class on class.id=user_class.class_id
               inner join trainers on class.trainers_id=trainers.id
               where user_id=?               ";
//        $sql="select * from user_class where id=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_user_by_id($id) {
        $sql = "select * from user where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_user($fist_name,$last_name,$email,$address,$phone_number,$plant,$id) {
        $sql = "update user set fist_name=?,last_name=?,email=?,address=?,phone_number=?,plant=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fist_name,$last_name,$email,$address,$phone_number,$plant,$id));
    }
    public function edit_user_class($class_id,$user_id){
        $sql = "update user_class set class_id=? where user_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($class_id,$user_id));
    }

    public  function delete_user($id){
        $sql="delete from user where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }
    public  function delete_user_class($user_id){
        $sql="delete from user_class where user_id=?";
        $this->setQuery($sql);
        return $this->execute(array($user_id));
    }

}

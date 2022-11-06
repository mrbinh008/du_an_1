<?php
require_once ("database.php");
class m_user extends database {
    public function insert_user($id,$username,$password,$fullname,$email,$role_) {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$username,$password,$fullname,$email,$role_));
    }
    public function read_user() {
        $sql = "select * from user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_user_by_id($id) {
        $sql = "select * from user where id = $id";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_user($fullname,$email,$role_,$id) {
        $sql = "update user set fullname = ?,email = ?,role_ = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fullname,$email,$role_,$id));
    }
    public  function delete_user($id){
        $sql="delete from user where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}

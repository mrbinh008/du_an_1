<?php
require_once ("database.php");
class m_blog extends database {
    public function insert_admin_member($id,$username,$password,$fullname,$email,$role_) {
        $sql = "INSERT INTO admin_account  VALUES (?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$username,$password,$fullname,$email,$role_));
    }
    public function read_admin_member() {
        $sql = "select * from admin_account";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_admin_member_by_id($id) {
        $sql = "select * from admin_account where id = $id";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_admin_member($fullname,$email,$role_,$id) {
        $sql = "update admin_account set fullname = ?,email = ?,role_ = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fullname,$email,$role_,$id));
    }
    public  function delete_admin_member($id){
        $sql="delete from admin_account where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}

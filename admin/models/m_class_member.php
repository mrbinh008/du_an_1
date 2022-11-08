<?php
require_once("database.php");

class m_class_member extends database
{
    public function insert_class_member($id, $class_id, $user_id)
    {
        $sql = "INSERT INTO class_member  VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $class_id, $user_id));
    }
//    public function read_class_member() {
//        $sql = "select * from class_member";
//        $this->setQuery($sql);
//        return $this->loadAllRows();
//    }

    public function read_class_member_by_class_id($class_id)
    {
        $sql = "select u.user_id as user_id,
                u.fist_name as fist_name,
                u.last_name as last_name,
                u.email as email,
                u.phone_number as phone_number
                from class_member as cl
                 inner join user as u on u.user_id=cl.user_id     
                 where cl.class_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($class_id));
    }

//    public function edit_user($fist_name,$last_name,$email,$address,$phone_number,$plant,$id) {
//        $sql = "update user set fist_name=?,last_name=?,email=?,address=?,phone_number=?,plant=? where id = ?";
//        $this->setQuery($sql);
//        return $this->execute(array($fist_name,$last_name,$email,$address,$phone_number,$plant,$id));
//    }
//    public function edit_user_class($class_id,$user_id){
//        $sql = "update user_class set class_id=? where user_id = ?";
//        $this->setQuery($sql);
//        return $this->execute(array($class_id,$user_id));
//    }

//    public  function delete_user($id){
//        $sql="delete from user where id=?";
//        $this->setQuery($sql);
//        return $this->execute(array($id));
//    }
    public function delete_class_member($user_id)
    {
        $sql = "delete from class_member where user_id=?";
        $this->setQuery($sql);
        return $this->execute(array($user_id));
    }

}

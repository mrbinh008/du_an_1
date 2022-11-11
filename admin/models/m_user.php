<?php
require_once("database.php");

class m_user extends database
{
    public function insert_user($id, $fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status)
    {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status));
    }
//    public function insert_user_class($class_id,$user_id){
//        $sql="INSERT INTO user_class VALUES (?,?)";
//        $this->setQuery($sql);
//        return $this->execute(array($class_id,$user_id));
//    }
    public function read_user()
    {
        $sql = "select user.*,plant.plant_name,plant.plant_cost from user inner join plant on plant.id=user.plant_id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_user_by_status($status)
    {
        $sql = "select user.*,plant.plant_name,plant.plant_cost from user
                inner join plant on plant.id=user.plant_id
                where status=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($status));
    }

//    public function read_user_detail($id) {
//        $sql = "select trainers.trainer_name AS trainers_name,class.time AS time_,class.day_ as day_ from user_class
//                inner join class on class.id=user_class.class_id
//               inner join trainers on class.trainers_id=trainers.id
//               where user_id=?               ";
////        $sql="select * from user_class where id=?";
//        $this->setQuery($sql);
//        return $this->loadAllRows(array($id));
//    }

    public function read_user_by_id($id)
    {
        $sql = "select * from user where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }


    public function edit_user($fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status, $id)
    {
        $sql = "update user set fist_name=?,last_name=?,email=?,address=?,phone_number=?,image=?,plant_id=?,status=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status, $id));
    }

    public function edit_user_class($class_id, $user_id)
    {
        $sql = "update user_class set class_id=? where user_id = ?";
        $this->setQuery($sql);
        return $this->execute(array($class_id, $user_id));
    }

    public function delete_user($id)
    {
        $sql = "delete from user where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function active_user($status, $id)
    {
        $sql = "update user set status=? where id=?";
        $this->setQuery($sql);
        return $this->execute(array($status, $id));
    }
}

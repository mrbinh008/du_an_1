<?php
require_once("database.php");

class m_user extends database
{
    public function insert_user($id, $user_id, $fist_name, $last_name, $email, $address, $phone_number, $plant)
    {
        $sql = "INSERT INTO user  VALUES (?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $user_id, $fist_name, $last_name, $email, $address, $phone_number, $plant));
    }

    public function read_user()
    {
        $sql = "select * from user";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_class_user($id)
    {
        $sql = "select trainers.trainer_name AS trainers_name,
                       class.time_ AS time_,
                       class.day_ as day_ ,
                       class.id as class_id,
                      categories.categories_name as categorie_name
                from class_member
                inner join class on class.id=class_member.class_id
                inner join trainers on class.trainer_id=trainers.id
                inner join categories on class.categorie_id=categories.id
                where user_id=?              ";
//        $sql="select * from user_class where id=?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_user_by_user_id($user_id)
    {
        $sql = "select * from user where user_id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($user_id));
    }

    public function edit_user($fist_name, $last_name, $email, $address, $phone_number, $plant, $id)
    {
        $sql = "update user set fist_name=?,last_name=?,email=?,address=?,phone_number=?,plant=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($fist_name, $last_name, $email, $address, $phone_number, $plant, $id));
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

    public function delete_user_class($user_id)
    {
        $sql = "delete from user_class where user_id=?";
        $this->setQuery($sql);
        return $this->execute(array($user_id));
    }

}

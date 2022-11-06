<?php
require_once("database.php");

class m_class extends database
{
    public function insert_class($id, $categories_id, $trainers_id, $time, $day_)
    {
        $sql = "INSERT INTO class  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $categories_id, $trainers_id, $time, $day_));
    }

    public function read_class($day_)
    {
        $sql = "select *,class.id as class_id,categories.categories_name as categories_name ,trainers.trainer_name as trainer_name from class 
                inner join categories on class.categories_id=categories.id
                inner join trainers on class.trainers_id=trainers.id
                where class.day_= '$day_';

";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_class_by_id($id)
    {
        $sql = "select * from class where id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_class($categories_id, $trainers_id, $time, $day_, $id)
    {
        $sql = "update class set categories_id = ?,trainers_id = ?,time = ?, day_=? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($categories_id, $trainers_id, $time, $day_, $id));
    }

    public function delete_class($id)
    {
        $sql = "delete from class where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}

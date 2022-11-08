<?php
require_once("database.php");

class m_class extends database
{
    public function insert_class($id, $categorie_id, $trainer_id, $time_, $day_)
    {
        $sql = "INSERT INTO class  VALUES (?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $categorie_id, $trainer_id, $time_, $day_));
    }

    public function read_class()
    {
//        $sql = "select class.*,class.id as class_id,categories.categories_name as categorie_name ,trainers.trainer_name as trainer_name from class
//                inner join categories on class.categorie_id=categories.id
//                inner join trainers on class.trainer_id=trainers.id ";
        $sql="SELECT day_ FROM class GROUP BY day_";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_class_by_id($id)
    {
        $sql = "select class.id as class_id,
                categories.categories_name as categorie_name
                from class
                INNER JOIN categories on categories.id = class.categorie_id
                where class.id =?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_class_by_day($day_)
    {
        $sql = "select class.id as class_id,categories.categories_name as categorie_name ,
                trainers.trainer_name as trainer_name,
                class.time_ as time_ ,
                class.day_ as day_
                from class 
                inner join categories on class.categorie_id=categories.id 
                inner join trainers on class.trainer_id=trainers.id 
                where day_ = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($day_));
    }


    public function count_class_by_day($day_)
    {
        $sql = "select *from class where day_ = ?";
        $this->setQuery($sql);
        return $this->loadRecord(array($day_));
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

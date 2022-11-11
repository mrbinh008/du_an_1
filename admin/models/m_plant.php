<?php
require_once("database.php");

class m_plant extends database
{
    public function insert_plant($id, $plant_name, $plant_exp, $plant_cost)
    {
        $sql = "INSERT INTO plant  VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $plant_name, $plant_exp, $plant_cost));
    }

    public function read_plant()
    {
        $sql = "select * from plant";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_plant_by_id($id)
    {
        $sql = "select * from plant where id = $id";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_plant($plant_name, $plant_exp, $plant_cost, $id)
    {
        $sql = "update plant set plant_name = ?,plant_exp=?,plant_cost = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($plant_name, $plant_exp, $plant_cost, $id));
    }

    public function delete_plant($id)
    {
        $sql = "delete from plant where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}

<?php
require_once ("database.php");
class m_trainers extends database {
    public function insert_trainer($id,$trainer_name,$trainer_image,$trainer_categorie) {
        $sql = "INSERT INTO trainers  VALUES (?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$trainer_name,$trainer_image,$trainer_categorie));
    }
    public function read_trainer() {
        $sql = "select tr.*,categories_name as categories_name from trainers as tr 
                inner join categories as ca on tr.trainer_categorie=ca.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_trainer_by_id($id) {
        $sql = "select * from trainers where id = $id";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_trainer($trainer_name,$trainer_image,$trainer_categorie,$id) {
        $sql = "update trainers set trainer_name = ?,trainer_image=?,trainer_categorie = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($trainer_name,$trainer_image,$trainer_categorie,$id));
    }
    public  function delete_trainer($id){
        $sql="delete from trainers where id=?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }


}

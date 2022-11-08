<?php
class c_trainer
{
    public function trainers_add()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();

        if (isset($_POST['btn_add_trainer'])) {
            $id = NULL;
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $m_trainers = new m_trainers();
            $m_trainers->insert_trainer($id,$trainer_name,$trainer_categorie);
        }
        include_once("view/v_trainers_add.php");
    }

    public function trainers_list()
    {
        $m_trainers = new m_trainers();
        $trainers = $m_trainers->read_trainer();
        include_once("view/v_trainers_list.php");
    }

    public function show_trainers_edit()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_trainers = new m_trainers();
            $trainer = $m_trainers->read_trainer_by_id($id);
            include_once("view/v_trainers_edit.php");
        }}

    public function trainers_update(){
        if (isset($_POST['btn_update_trainer'])) {
            $id = $_POST['id'];
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $m_trainers = new m_trainers();
            $m_trainers->edit_trainer($trainer_name,$trainer_categorie,$id);
            header('location:?ctr=trainers_list');
        }
    }

    public function trainers_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $m_class->delete_class($id);
            header('location:?ctr=trainers_list.&dl=success');
        }
    }
}
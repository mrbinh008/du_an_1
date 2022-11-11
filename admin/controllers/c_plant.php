<?php
//include_once("models/m_plant.php");
class c_plant
{
    public function plant_add()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_FILES['image'])) {
            $trainer_image = $_FILES['image']['name'];
        }
        if (isset($_POST['btn_add_trainer'])) {
            $id = NULL;
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $trainer_image = $_FILES['image']['name'];
            $m_trainers = new m_trainers();
            $m_trainers->insert_trainer($id, $trainer_name, $trainer_image, $trainer_categorie);
        }
        include_once("view/plant/v_plant_add.php");
    }

    public function plant_list()
    {
        $m_plant = new m_plant();
        $plant = $m_plant->read_plant();
        include_once("view/plant/v_plant_list.php");
    }

    public function show_plant_edit()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_plant = new m_plant();
            $plant = $m_plant->read_plant_by_id($id);
            include_once("view/plant/v_plant_edit.php");
        }
    }

    public function trainers_update()
    {
        if (isset($_POST['btn_update_trainer'])) {
            $id = $_POST['id'];
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $trainer_image = $_FILES['image']['name'];
            $m_trainers = new m_trainers();
            $m_trainers->edit_trainer($trainer_name, $trainer_image, $trainer_categorie, $id);
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
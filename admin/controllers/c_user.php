<?php
//include_once("models/m_trainers.php");
include_once("models/m_categorie.php");
include_once("models/m_user.php");

class c_user
{
    public function user_add()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();

        if (isset($_POST['btn_add_user'])) {
            $id = NULL;
            $fist_name = $_POST['fist_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $plant = $_POST['plant_type'];
            $categorie_id = $_POST['categorie_id'];
            $status = $_POST['status'];
            $m_user = new m_user();
            $m_user->insert_user($id, $fist_name, $last_name, $email, $address, $phone_number, $categorie_id, $plant, $status);
        }
        include_once("view/v_user_add.php");
    }

    public function user_list()
    {

        if (isset($_POST['status_type'])&&$_POST['status_type']!=null) {
            $status = $_POST['status_type'];
            $m_user = new m_user();
            $user = $m_user->read_user_by_status($status);
        } else{
            $m_user = new m_user();
            $user = $m_user->read_user();
        }
        include_once("view/v_user_list.php");
    }

    public function user_detail_list()
    {
        if (isset($_GET['user_id'])) {
            $id = $_GET['user_id'];
            $m_user = new m_user();
            $user = $m_user->read_user_by_id($id);
            $m_user = new m_user();
            $user_detail = $m_user->read_user_detail($id);
            include_once("view/v_user_detail_list.php");
        }
    }

    public function show_user_edit()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_trainers = new m_trainers();
            $trainer = $m_trainers->read_trainer_by_id($id);
            include_once("view/v_trainers_edit.php");
        }
    }

    public function user_update()
    {
        if (isset($_POST['btn_update_trainer'])) {
            $id = $_POST['id'];
            $trainer_name = $_POST['trainer_name'];
            $trainer_categorie = $_POST['trainer_categorie'];
            $m_trainers = new m_trainers();
            $m_trainers->edit_trainer($trainer_name, $trainer_categorie, $id);
            header('location:?ctr=trainers_list&upd=success');
        }
    }

    public function user_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $m_class->delete_class($id);
            header('location:?ctr=class_list&dl=success');
        }
    }
}
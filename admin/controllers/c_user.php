<?php


class c_user
{
    public function user_add()
    {
        $m_class = new m_class();
        $class = $m_class->read_class();
        if (isset($_POST['btn_add_user'])) {
            $id = null;
            $user_id = uniqid('uid_');
            $fist_name = $_POST['fist_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $plant = $_POST['plant'];
            $class_id = $_POST['class_id'];
            $m_user = new m_user();
            $m_user->insert_user($id,$user_id, $fist_name, $last_name, $email, $address, $phone_number, $plant);

            foreach ($class_id as $cl_id) {
                $m_class_member = new m_class_member();
                $m_class_member->insert_class_member(null, $cl_id, $user_id);
            }

        }
        include_once("view/v_user_add.php");
    }

    public function user_list()
    {
        $m_user = new m_user();
        $user = $m_user->read_user();
        include_once("view/v_user_list.php");
    }

    public function user_detail_list()
    {
        if (isset($_GET['user_id'])) {
            $user_id = $_GET['user_id'];
            $m_user = new m_user();
            $user = $m_user->read_user_by_user_id($user_id);
            $m_user = new m_user();
            $class_user = $m_user->read_class_user($user_id);
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
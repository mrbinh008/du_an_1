<?php
//include_once("models/m_trainers.php");


class c_user
{
    public function user_add()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        $m_plant = new m_plant();
        $plant = $m_plant->read_plant();
        if (isset($_POST['btn_add_user'])) {
            $id = NULL;
            $fist_name = $_POST['fist_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phone_number = $_POST['phone_number'];
            $image=$_FILES['image']['name'];
            $plant = $_POST['plant_id'];
            $status = $_POST['status'];
            $m_user = new m_user();
            $m_user->insert_user($id, $fist_name, $last_name, $email, $address, $phone_number,$image, $plant, $status);
        }
        include_once("view/user/v_user_add.php");
    }

    public function user_list()
    {

        if (isset($_POST['status_type']) && $_POST['status_type'] != null) {
            $status = $_POST['status_type'];
            $m_user = new m_user();
            $user = $m_user->read_user_by_status($status);
        } else {
            $m_user = new m_user();
            $user = $m_user->read_user();
        }
        include_once("view/user/v_user_list.php");
    }

//    public function user_detail_list()
//    {
//        if (isset($_GET['user_id'])) {
//            $id = $_GET['user_id'];
//            $m_user = new m_user();
//            $user = $m_user->read_user_by_id($id);
//            $m_user = new m_user();
//            $user_detail = $m_user->read_user_detail($id);
//            include_once("view/user/v_user_detail_list.php");
//        }
//    }

    public function show_user_edit()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_user = new m_user();
            $user = $m_user->read_user_by_id($id);
            include_once("view/user/v_user_edit.php");
        }
    }

    public function user_update()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $m_user = new m_user();
            $user = $m_user->read_user_by_id($id);
            //update
            if (isset($_POST['btn_update_trainer'])) {
                $id = $_POST['id'];
                $fist_name = $_POST['fist_name'];
                $last_name = $_POST['last_name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone_number = $_POST['phone_number'];
//                $image = !empty($_FILES['image']['name']) == 0 ? $_FILES['image']['name'] : $user->image;
                $image=null;
                $plant = $_POST['plant'];
                $status = $_POST['status'];
                $m_user = new m_user();
                $m_user->edit_user($fist_name, $last_name, $email, $address, $phone_number, $image, $plant, $status, $id);
                header('location:?ctr=user_list&upd=success');
            }
        }
    }

    public function user_active(){
        if (isset($_GET['user_id'])){
            $id=$_GET['user_id'];
            $status=0;
            $m_user= new m_user();
            $m_user->active_user($status,$id);
            header('location:?ctr=user_list&atc=success');
        }
    }

    public function user_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_user = new m_user();
            $m_user->delete_user($id);
            header('location:?ctr=class_list&dl=success');
        }
    }


}
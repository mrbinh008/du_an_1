<?php
include_once("models/m_categorie.php");

class c_categorie
{
    public function categorie_add()
    {
        if (isset($_POST['btn_add_categorie'])) {
            $id = NULL;
            $categorie_name = $_POST['categorie_name'];
            $categorie_mean = $_POST['categorie_mean'];

            $m_categorie = new m_categorie();
            $result = $m_categorie->insert_categorie($id, $categorie_name, $categorie_mean);
//            header('location:admin_member_add.php?result=' . $username);
        }
        include_once("view/v_categories_add.php");
    }

    public function categorie_list()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();
        include_once("view/v_categorie_list.php");
    }

    public function show_categorie_edit()
    {
        $m_categorie = new m_categorie();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $categorie = $m_categorie->read_categorie_by_id($id);
            include_once("view/v_categorie_edit.php");
        }
    }

    public function categorie_update()
    {
        $m_categorie = new m_categorie();
        if (isset($_POST['btn_update_categorie'])) {
            $id = $_POST['id'];
            $categorie_name = $_POST['categorie_name'];
            $categorie_meaningful = $_POST['categorie_mean'];
            $m_categorie->edit_categorie($categorie_name,$categorie_meaningful,$id);
            header('location:?ctr=categorie_list&upd=success');
        }

    }

    public function categorie_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_categorie = new m_categorie();
            $m_categorie->delete_categorie($id);
            header('location:?ctr=categorie_list&dl=success');
        }
    }
}
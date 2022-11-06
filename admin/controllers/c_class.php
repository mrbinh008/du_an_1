<?php
include_once("models/m_categorie.php");
include_once("models/m_class.php");
include_once("models/m_trainers.php");

class c_class
{
    public function class_add()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();

        $m_trainers = new m_trainers();
        $trainers = $m_trainers->read_trainer();

        if (isset($_POST['btn_add_class'])) {
            $id = NULL;
            $categories_id = $_POST['categories_id'];
            $trainers_id = $_POST['trainers_id'];
            $time = $_POST['time'];
            $day_ = $_POST['day_'];
            $m_class = new m_class();
            $m_class->insert_class($id, $categories_id, $trainers_id, $time, $day_);
        }
        include_once("view/v_class_add.php");
    }

    public function class_list()
    {
        include_once("view/v_class_list.php");
    }

    public function class_detail_list()
    {
        $day_ = $_GET['day'];
        $m_class = new m_class();
        $class = $m_class->read_class($day_);
        include_once("view/v_class_detail_list.php");
    }

    public function class_edit()
    {
        $m_categorie = new m_categorie();
        $categorie = $m_categorie->read_categorie();

        $m_trainers = new m_trainers();
        $trainers = $m_trainers->read_trainer();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $class = $m_class->read_class_by_id($id);
            include_once("view/v_class_edit.php");
        }
        if (isset($_POST['btn_update_class'])) {
            $id = $_GET['id'];
            $categories_id = $_POST['categories_id'];
            $time = $_POST['time'];
            $day_ = $_POST['day_'];
            $trainers_id = $_POST['trainers_id'];
            $mclass = new m_class();
            $mclass->edit_class($categories_id, $trainers_id, $time, $day_, $id);

            header('location:class_detail_list.php?day='.$day_);
        }
    }


    public function class_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $m_class->delete_class($id);
            header('location:class_list.php?dl=success');
        }
    }
}
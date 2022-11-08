<?php

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
            $categorie_id = $_POST['categories_id'];
            $trainer_id = $_POST['trainers_id'];
            $time_ = $_POST['time'];
            $day_ = $_POST['day_'];
            $m_class = new m_class();
            $m_class->insert_class($id, $categorie_id, $trainer_id, $time_, $day_);
        }
        include_once("view/v_class_add.php");
    }

    public function class_list()
    {
        $m_class = new m_class();
        $class = $m_class->read_class();
        $day_='Monday';
        if (isset($_POST['day_'])&&$_POST['day_']!=null){
        $day_=$_POST['day_'];
        }
        $m_class = new m_class();
        $class_day = $m_class->read_class_by_day($day_);
        include_once("view/v_class_list.php");
    }

    public function class_detail_list()
    {
        $class_id=$_GET['class_id'];
        $m_class= new m_class();
        $class=$m_class->read_class_by_id($class_id);
        $m_class_member = new m_class_member();
        $class_member = $m_class_member->read_class_member_by_class_id($class_id);
        include_once("view/v_class_detail_list.php");
    }

    public function show_class_edit()
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
        }}
    public function class_update(){
        if (isset($_POST['btn_update_class'])) {
            $id = $_POST['id'];
            $categories_id = $_POST['categories_id'];
            $time = $_POST['time'];
            $day_ = $_POST['day_'];
            $trainers_id = $_POST['trainers_id'];
            $mclass = new m_class();
            $mclass->edit_class($categories_id, $trainers_id, $time, $day_, $id);
            header('location:?ctr=class_detail_list&day='.$day_);
        }
    }


    public function class_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_class = new m_class();
            $m_class->delete_class($id);
            header('location:?ctr=class_list&dl=success');
        }
    }
}
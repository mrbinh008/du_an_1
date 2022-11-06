<?php
include_once("models/m_admin_member.php");

class c_admin_member
{
    public function admin_member_add()
    {
        if (isset($_POST['btn_add_member'])) {
            $id = NULL;
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $role_ = $_POST['role'];

            $m_admin_member = new m_admin_member();
            $result = $m_admin_member->insert_admin_member($id, $username, md5($password), $fullname, $email, $role_);
//            header('location:admin_member_add.php?result=' . $username);
        }
        include_once("view/v_admin_member_add.php");
    }

    public function admin_member_list()
    {
        $m_admin_member = new m_admin_member();
        $admin_member = $m_admin_member->read_admin_member();
        include_once("view/v_admin_member_list.php");
    }

    public function show_admin_member_edit()
    {
        $m_admin_member = new m_admin_member();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $admin_member = $m_admin_member->read_admin_member_by_id($id);
            include_once("view/v_admin_member_edit.php");
        }
    }

    public function admin_member_update()
    {
        $m_admin_member = new m_admin_member();
        if (isset($_POST['btn_update_member'])) {
            $id = $_POST['id'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $role_ = $_POST['role'];
            $m_admin_member->edit_admin_member($fullname, $email, $role_, $id);
            header('location:admin_member_list.php');
        }

    }

    public function admin_member_delete()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_admin_member = new m_admin_member();
            $m_admin_member->delete_admin_member($id);
            header('location:admin_member_list.php?dl=success');
        }
    }
}
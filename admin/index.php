<?php
include_once 'controllers/c_home.php';
include_once 'controllers/c_admin_member.php';
include_once 'controllers/c_categorie.php';
include_once 'controllers/c_class.php';
include_once 'controllers/c_trainer.php';
include_once 'controllers/c_user.php';
//include_once 'controllers/c_comments';
//include_once 'controllers/c_contact';
//include_once 'controllers/c_blog';
//models
include_once("models/m_class.php");
include_once("models/m_categorie.php");
include_once("models/m_user.php");
include_once("models/m_class_member.php");
include_once("models/m_comments.php");
include_once("models/m_contact.php");
include_once("models/m_trainers.php");
include_once("models/m_admin_member.php");
include_once("models/m_blog.php");

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
    case 'home':
        $home = new c_home();
        $home->index();
        break;
        //admin_member
    case 'admin_member_add':
        $admin_member = new c_admin_member();
        $admin_member->admin_member_add();
        break;
    case 'admin_member_delete':
        $admin_member = new c_admin_member();
        $admin_member->admin_member_delete();
        break;
    case 'admin_member_edit':
        $admin_member = new c_admin_member();
        $admin_member->show_admin_member_edit();
        break;
    case 'admin_member_list':
        $admin_member = new c_admin_member();
        $admin_member->admin_member_list();
        break;
    case 'admin_member_update':
        $admin_member = new c_admin_member();
        $admin_member->admin_member_update();
        break;
        //blog
    case 'blog_add':
        $blog = new c_blog();
        $blog->blog_add();
        break;
    case 'blog_delete':
        $blog = new c_blog();
        $blog->blog_delete();
        break;
    case 'blog_edit':
        $blog = new c_blog();
        $blog->show_blog_edit();
        break;
    case 'blog_list':
        $blog = new c_blog();
        $blog->blog_list();
        break;
    case 'blog_update':
        $blog = new c_blog();
        $blog->blog_update();
        break;
        //categorie
    case 'categorie_add':
        $categorie = new c_categorie();
        $categorie->categorie_add();
        break;
    case 'categorie_delete':
        $categorie = new c_categorie();
        $categorie->categorie_delete();
        break;
    case 'categorie_edit':
        $categorie = new c_categorie();
        $categorie->show_categorie_edit();
        break;
    case 'categorie_list':
        $categorie = new c_categorie();
        $categorie->categorie_list();
        break;
    case 'categorie_update':
        $categorie = new c_categorie();
        $categorie->categorie_update();
        break;
        //class
    case 'class_add':
        $class = new c_class();
        $class->class_add();
        break;
    case 'class_delete':
        $class = new c_class();
        $class->class_delete();
        break;
    case 'class_edit':
        $class = new c_class();
        $class->show_class_edit();
        break;
    case 'class_list':
        $class = new c_class();
        $class->class_list();
        break;
    case 'class_detail_list':
        $class = new c_class();
        $class->class_detail_list();
        break;
    case 'class_update':
        $class = new c_class();
        $class->class_update();
        break;
        //comments
    case 'comments_add':
        $comments = new c_comments();
        $comments->comments_add();
        break;
    case 'comments_delete':
        $comments = new c_comments();
        $comments->comments_delete();
        break;
    case 'comments_edit':
        $comments = new c_comments();
        $comments->show_comments_edit();
        break;
    case 'comments_list':
        $comments = new c_comments();
        $comments->comments_list();
        break;
    case 'comments_update':
        $comments = new c_comments();
        $comments->comments_update();
        break;
        //contact
    case 'contact_add':
        $contact = new c_contact();
        $contact->contact_add();
        break;
    case 'contact_delete':
        $contact = new c_contact();
        $contact->contact_delete();
        break;
    case 'contact_edit':
        $contact = new c_contact();
        $contact->show_contact_edit();
        break;
    case 'contact_list':
        $contact = new c_contact();
        $contact->contact_list();
        break;
    case 'contact_update':
        $contact = new c_contact();
        $contact->contact_update();
        break;
        //trainers
    case 'trainers_add':
        $trainers = new c_trainer();
        $trainers->trainers_add();
        break;
    case 'trainers_delete':
        $trainers = new c_trainer();
        $trainers->trainers_delete();
        break;
    case 'trainers_edit':
        $trainers = new c_trainer();
        $trainers->show_trainers_edit();
        break;
    case 'trainers_list':
        $trainers = new c_trainer();
        $trainers->trainers_list();
        break;
    case 'trainers_update':
        $trainers = new c_trainer();
        $trainers->trainers_update();
        break;
        //user
    case 'user_add':
        $user = new c_user();
        $user->user_add();
        break;
    case 'user_delete':
        $user = new c_user();
        $user->user_delete();
        break;
    case 'user_edit':
        $user = new c_user();
        $user->show_user_edit();
        break;
    case 'user_list':
        $user = new c_user();
        $user->user_list();
        break;
    case 'user_update':
        $user = new c_user();
        $user->user_update();
        break;
    case 'user_detail_list':
        $user = new c_user();
        $user->user_detail_list();
        break;

    default:
        $error_404_show;
}

<?php
//import controllers
include_once 'controllers/c_home.php';
include_once 'controllers/c_admin_member.php';
include_once 'controllers/c_categorie.php';
include_once 'controllers/c_trainer.php';
include_once 'controllers/c_user.php';
include_once 'controllers/c_plant.php';
//include_once 'controllers/c_comments';
//include_once 'controllers/c_contact';
//include_once 'controllers/c_blog';
include_once 'controllers/c_404_error.php';
//models
include_once("models/m_categorie.php");
include_once("models/m_user.php");
include_once("models/m_plant.php");
include_once("models/m_trainers.php");
include_once("models/m_admin_member.php");
//include_once("models/m_comments.php");
//include_once("models/m_contact.php");
//include_once("models/m_blog.php");
$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';
session_start();
switch ($ctr) {
    case '/':
        //login
    case 'v_login':
        $admin_member = new c_admin_member();
        $admin_member->v_login();
        break;
    case 'login':
        $admin_member = new c_admin_member();
        $admin_member->login();
        break;
    case 'logout':
        $admin_member = new c_admin_member();
        $admin_member->logout();
        break;
    //home
    case 'home':
        if (isset($_SESSION['user_admin'])) {
            $home = new c_home();
            $home->index();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    //admin_member
    case 'admin_member_add':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_add();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    case 'admin_member_delete':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_delete();
        } else {
            $error = new c_404_error();
            $error->show_404_error();
        }
        break;
    case 'admin_member_edit':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->show_admin_member_edit();
            break;
        } else {
            $error = new c_404_error();
        }
    case 'admin_member_list':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'admin_member_update':
        if (isset($_SESSION['user_admin'])) {
            $admin_member = new c_admin_member();
            $admin_member->admin_member_update();
            break;
        } else {
            $error = new c_404_error();
        }
    //blog
    case 'blog_add':
        if (isset($_SESSION['user_admin'])) {
            $blog = new c_blog();
            $blog->blog_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'blog_delete':
        if (isset($_SESSION['user_admin'])) {
            $blog = new c_blog();
            $blog->blog_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'blog_edit':
        if (isset($_SESSION['user_admin'])) {
            $blog = new c_blog();
            $blog->show_blog_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'blog_list':
        if (isset($_SESSION['user_admin'])) {
            $blog = new c_blog();
            $blog->blog_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'blog_update':
        if (isset($_SESSION['user_admin'])) {
            $blog = new c_blog();
            $blog->blog_update();
        } else {
            $error = new c_404_error();
        }
        break;
    //categorie
    case 'categories_add':
        if (isset($_SESSION['user_admin'])) {
            $categorie = new c_categorie();
            $categorie->categorie_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'categorie_delete':
        if (isset($_SESSION['user_admin'])) {
            $categorie = new c_categorie();
            $categorie->categorie_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case
    'categorie_edit':
        if (isset($_SESSION['user_admin'])) {
            $categorie = new c_categorie();
            $categorie->show_categorie_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'categorie_list':
        if (isset($_SESSION['user_admin'])) {
            $categorie = new c_categorie();
            $categorie->categorie_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'categorie_update':
        if (isset($_SESSION['user_admin'])) {
            $categorie = new c_categorie();
            $categorie->categorie_update();
        } else {
            $error = new c_404_error();
        }
        break;
    //comments
    case 'comments_add':
        if (isset($_SESSION['user_admin'])) {
            $comments = new c_comments();
            $comments->comments_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'comments_delete':
        if (isset($_SESSION['user_admin'])) {
            $comments = new c_comments();
            $comments->comments_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'comments_edit':
        if (isset($_SESSION['user_admin'])) {
            $comments = new c_comments();
            $comments->show_comments_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'comments_list':
        if (isset($_SESSION['user_admin'])) {
            $comments = new c_comments();
            $comments->comments_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'comments_update':
        if (isset($_SESSION['user_admin'])) {
            $comments = new c_comments();
            $comments->comments_update();
        } else {
            $error = new c_404_error();
        }
        break;
    //contact
    case 'contact_add':
        if (isset($_SESSION['user_admin'])) {
            $contact = new c_contact();
            $contact->contact_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'contact_delete':
        if (isset($_SESSION['user_admin'])) {
            $contact = new c_contact();
            $contact->contact_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'contact_edit':
        if (isset($_SESSION['user_admin'])) {
            $contact = new c_contact();
            $contact->show_contact_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'contact_list':
        if (isset($_SESSION['user_admin'])) {
            $contact = new c_contact();
            $contact->contact_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'contact_update':
        if (isset($_SESSION['user_admin'])) {
            $contact = new c_contact();
            $contact->contact_update();
        } else {
            $error = new c_404_error();
        }
        break;
    //trainers
    case 'trainers_add':
        if (isset($_SESSION['user_admin'])) {
            $trainers = new c_trainer();
            $trainers->trainers_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'trainers_delete':
        if (isset($_SESSION['user_admin'])) {
            $trainers = new c_trainer();
            $trainers->trainers_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'trainers_edit':
        if (isset($_SESSION['user_admin'])) {
            $trainers = new c_trainer();
            $trainers->show_trainers_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'trainers_list':
        if (isset($_SESSION['user_admin'])) {
            $trainers = new c_trainer();
            $trainers->trainers_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'trainers_update':
        if (isset($_SESSION['user_admin'])) {
            $trainers = new c_trainer();
            $trainers->trainers_update();
        } else {
            $error = new c_404_error();
        }
        break;

        //plant

    case 'plant_list':
        if (isset($_SESSION['user_admin'])) {
            $plant = new c_plant();
            $plant->plant_list();
        } else {
            $error = new c_404_error();
        }
        break;
    //user
    case 'user_add':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_add();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_delete':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_delete();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_edit':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->show_user_edit();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_list':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_update':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_update();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_detail_list':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_detail_list();
        } else {
            $error = new c_404_error();
        }
        break;
    case 'user_active':
        if (isset($_SESSION['user_admin'])) {
            $user = new c_user();
            $user->user_active();
        } else {
            $error = new c_404_error();
        }
        break;

    default:
        $error = new c_404_error();
        $error->show_404_error();
}

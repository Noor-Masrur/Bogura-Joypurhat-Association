<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateHasimukh.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
$table = 'activities';

$errors = array();
$id = '';
$name = '';
$description = '';
$topics = selectAll($table);


if(isset($_POST['add-topic']))
{   
    adminOnly();
    $errors = validateHasimukh($_POST);
    if(count($errors)=== 0){
        unset($_POST['add-topic'], $_POST['image']);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = "Event added succesfuly";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/hasimukh/index.php');
        exit(); 
    }
    else{
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
    
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $name = $topic['name'];
    $description = $topic['description'];
}

if(isset($_GET['del_id'])){
    adminOnly();
    $id = $_GET['del_id'];
    $count = delete($table, $id);
    $_SESSION['message']= "Deleted successfully.";
    $_SESSION['type'] = 'success';
    header('Location: ' . BASE_URL . 'admin/hasimukh/index.php');
}

if(isset($_POST['update-btn'])){

    adminOnly();
    $errors = validateHasimukh($_POST);
    if(count($errors)=== 0){
        $id = $_POST['id'];
        unset($_POST['update-btn'], $_POST['id']);
        $topic_id = update($table,$id, $_POST);
        $_SESSION['message'] = "Event updated";
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/hasimukh/index.php');
        exit();
    }
    else{
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }



    
}
<?php

include(ROOT_PATH . "/app/database/db.php");

$table = 'activities';
$id = '';
$name = '';
$description = '';
$topics = selectAll($table);


if(isset($_POST['add-topic']))
{
    unset($_POST['add-topic'], $_POST['image']);
   
     $topic_id = create($table, $_POST);
    
    $_SESSION['message'] = "Event added succesfuly";
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/hasimukh/index.php');
    exit();
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $name = $topic['name'];
    $description = $topic['description'];
}


if(isset($_POST['update-btn'])){
    $id = $_POST['id'];
    unset($_POST['update-btn'], $_POST['id']);
    $topic_id = update($table,$id, $_POST);
    $_SESSION['message'] = "Event updated";
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/hasimukh/index.php');
    exit();
}
<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validatePost.php");
$table = 'posts';
$errors = array();
$topics = selectAll('activities');
$posts = selectAll($table);

$title ="";
$body = "";
$activity_id = "";
$published = "";

if(isset($_POST['add-post'])){
    $errors = validatePost($_POST);
   // debug($_FILES['image']['name']);
    if(!empty($_FILES['image']['name'])){
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        if($result){
            $_POST['image'] = $image_name;
        }
        else{
            array_push($errors, "Failed to upload image");
        }
    }
    else{
        array_push($errors, "Post image reqiured");
    }
    if(count($errors)===0){
        unset($_POST['add-post']);
        
        $_POST['user_id'] = 1;
        $_POST['published'] = isset($_POST['published']) ? 1: 0;
        $_POST['body'] = htmlentities($_POST['body']);

         
        $post_id = create($table, $_POST);
        $_SESSION['message']= "Post created successfully.";
        $_SESSION['type'] = 'success';
        //debug($_POST);
        header("location: " . BASE_URL . "/admin/activities/index.php");
        
    }
    else{
        $title = $_POST['title'];
        $body = $_POST['body'];
        $activity_id = $_POST['activity_id'];
        $published = isset($_POST['published']) ? 1: 0;
    }
}
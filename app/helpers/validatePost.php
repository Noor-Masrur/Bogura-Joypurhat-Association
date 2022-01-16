<?php

function validatePost($post){
    $errors = array();
    if(empty($post['title'])){
        array_push($errors, 'Title is required');
    } 
    if(empty($post['body'])){
        array_push($errors, 'Description is required');
    } 
    if(empty($post['activity_id'])){
        array_push($errors, 'Please a topic');
    } 
    
    $existingPost= selectOne('posts', ['title' => $post['title']]);
    if($existingPost){
        if(isset($post['update-post']) && $existingPost['id'] != $post['id']){
            array_push($errors, 'Post with that title already exsits');
        }
        if(isset($post['add-post']))
        {
            array_push($errors, 'Post with that title already exsits');
        }
        
    }
    return $errors;
}


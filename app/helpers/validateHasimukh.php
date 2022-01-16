<?php

function validateHasimukh($topic){
    $errors = array();
    if(empty($topic['name'])){
        array_push($errors, 'Name is required');
    } 
    $existingTopic = selectOne('activities', ['name' => $topic['name']]);
    if(isset($existingTopic)){
        array_push($errors, 'Event already exsits');
    }
    return $errors;
}


function validateHasimukh2($topic){
    $errors = array();
    if(empty($topic['name'])){
        array_push($errors, 'Name is required');
    } 
    $existingTopic = selectOne('activities', ['name' => $topic['name']]);
    if(isset($existingTopic)){
        array_push($errors, 'Event already exsits');
    }   
    
    return $errors;
}

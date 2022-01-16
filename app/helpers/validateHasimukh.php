<?php

function validateHasimukh($topic){
    $errors = array();
    if(empty($topic['name'])){
        array_push($errors, 'Name is required');
    } 
    $existingTopic = selectOne('activities', ['name' => $topic['name']]);
   
    if($existingTopic){
        if(isset($topic['update-btn']) && $existingTopic['id'] != $topic['id']){
            array_push($errors, 'Event with that title already exsits');
        }
        if(isset($topic['add-topic']))
        {
            array_push($errors, 'Event with that title already exsits');
        }
        
    }


    return $errors;
}


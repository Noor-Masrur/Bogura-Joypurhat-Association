
<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validateUser.php");
 
$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$table = 'users';

function loginUser($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] ='Your are logged in';
    $_SESSION['type'] ='success';
    if(isset($_POST['remember'])){
        setcookie('username' , $_POST['username'] , time() + 60*60*7);
    }
    if($_SESSION['admin']){
        header('location: ' . BASE_URL . '/admin/dashboard.php');
    }
    else{
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

if(isset($_POST['register-btn'])){ 

    $errors = validateUser($_POST);
    

    if(count($errors) === 0){
        unset($_POST['register-btn'] , $_POST['passwordConf'], $_POST['remember']);

        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $user_id = create($table, $_POST);
        $user = selectOne($table, ['id' => $user_id]);


        //log in user
        loginUser($user);
       
    }

    else{
                
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
    }

    
}


if(isset($_POST['login-btn'])){ 

    $errors = validateLogin($_POST);
    

    if(count($errors) === 0){
        $user = selectOne($table, ['username' => $_POST['username']]);
    

        if($user && password_verify($_POST['password'], $user['password'])){

           //log in user
            loginUser($user);
        }
        else{
            array_push($errors, 'Wrong Credentials');
            
        }
       
    }

    $username = $_POST['username'];
    $password = $_POST['password'];


    
}


?>
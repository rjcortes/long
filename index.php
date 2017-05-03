<?php 
require('pdoConnect.php');
$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = "show_login_page";
}
if ($action == "show_login_page")     
{
	header("Location: login.php");
}else if($action == "test_user_valid"){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $sql = 'select * from accounts where email = "'.$email.'"';
    $results = runQuery($sql);
    if(count($results)){
        $password_db = $results[0]['password'];
        if ($password_db==$pass) {
            $owner_id = $results[0]['id'];
            $fname = $results[0]['fname'];
            $lname = $results[0]['lname'];
            setcookie('ownerid',$owner_id);
            setcookie('fname',$fname);
            setcookie('lname',$lname);
            header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");
        } else {
            header("Location: badinfo.php");
        }
        
        
    }else{
        header("Location: badinfo.php");
    }
}else if($action == "edit"){

}else if($action == "delete"){

    $id = $_POST['item_id'];
    $sql = 'delete from my_tasks where taskid = "'.$id.'"';
    $results = runQuery($sql);

    $owner_id = $_COOKIE['ownerid'];
    $fname = $_COOKIE['fname'];
    $lname = $_COOKIE['lname'];
    header("Location: newtask.php?ownerid=$owner_id&fname=$fname&lname=$lname");

}else if($action == "complete"){

}else if($action == "incomplete"){
}  




?>











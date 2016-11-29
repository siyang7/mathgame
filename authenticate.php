<?php session_start();
extract($_POST);
$userError = $passError = '';
if (isset($email) && isset($password)) {
    
    if($email === 'a@a.a' && $password === 'aaa') {
        $_SESSION['login'] = true; 
        
        //echo "Valid login";
        //die();
        
        header('LOCATION: index.php'); die();
    } else {  
        //echo "inValid login";
        //die();
        
        if($email !== 'a@a.a') {
            echo '<p style="color: red">Invalid Username</p>';
        }
        
        if($password !== 'aaa') {
            echo '<p style="color: red">Invalid Password</p>';
        }
    
    }
}
?>
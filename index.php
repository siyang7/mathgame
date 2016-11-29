<?php session_start(); 

/*
session_start(); $username = $password = $userError = $passError = '';
if(isset($_POST['sub'])){
  $username = $_POST['username']; $password = $_POST['password'];
  if($username === 'admin' && $password === 'password'){
    $_SESSION['login'] = true; header('LOCATION:wherever.php'); die();
  }
  if($username !== 'admin')$userError = 'Invalid Username';
  if($password !== 'password')$passError = 'Invalid Password';
}

*/

        $username = $password = $userError = $passError = '';
        if(isset($_POST['sub'])) {
            
            $username = $_POST['email']; $password = $_POST['password'];
            
            if($username === 'a@a.a' && $password === 'aaa') {
                $_SESSION['login'] = true; header('LOCATION: authenticate.php'); die();
        }
          
        if($username !== 'a@a.a')$userError = 'Invalid Username';
        if($password !== 'aaa')$passError = 'Invalid Password';
        
        }



echo "<!DOCTYPE HTML>
    
    
<html lang='en'>

<head>
	<title>Math Game</title>
    <link href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet' media='screen' />
    <link href='styles/styles.css' rel='stylesheet' />
  <meta charset='utf-8' />
</head>

    <body>

     

        <div class='container'>
            <div class='row'>
                <div class='col-sm-10 col-sm-offset-1'><h1>Please login to enjoy a math game.</h1></div>
                <div class='col-sm-1'></div>
            </div>

            <form action='{$_SERVER['PHP_SELF']}' method='post' role='form' class='form-horizontal'>
                <div class='form-group'>
                    <div class='col-sm-4 text-right'>Email:</div>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' id='email' name='email' placeholder='Email' size='6' />
                        <div class='error'>$userError</div>
                    </div>
                    <div class='col-sm-5'></div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-4 text-right'>Password:</div>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' id='password' name='password' placeholder='Password' size='6' />
                        <div class='error'>$passError</div>
                    </div>
                    <div class='col-sm-5'></div>
                </div>
                <div class='row'>
                    <div class='col-sm-3 col-sm-offset-4'>
                        <button type='submit' class='btn btn-primary' name='sub'>Login</button>
                    </div>
                </div>
            </form>

            <div class='row'>

            </div>
        </div>
    
    </body>
</html>";


?>
<?php session_start(); 

/*
        $usr = "admin@admin.com";
        $psw = "password";
        $username = '$_POST[username]';
        $password = '$_POST[password]';
        //$usr == $username && $psw == $password
        //session_start();
        if ($_SESSION['login']==true || ($_POST['username']=="admin@admin.com" && $_POST['password']=="password")) {
            echo "password accepted";
            $_SESSION['login']=true;
        else {
            echo "incorrect login";
        }
*/
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="styles/styles.css" rel="stylesheet" />
  <meta charset="utf-8" />
</head>

    <body>

     

        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1"><h1>Please login to enjoy a math game.</h1></div>
                <div class="col-sm-1"></div>
            </div>

            <form action="authenticate.php" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-4 text-right">Email:</div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" size="6" />
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 text-right">Password:</div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Password" size="6" />
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>

            <div class="row">

            </div>
        </div>
    
    </body>
</html>


<?php ?>
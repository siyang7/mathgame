<!DOCTYPE HTML>
    
    
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

            <form action='authenticate.php' method='post' role='form' class='form-horizontal'>
                <div class='form-group'>
                    <div class='col-sm-4 text-right'>Email:</div>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' id='email' name='email' placeholder='Email' size='6' />
                        
                        
                        <?php if(isset($userError)) { ?>
                            <div class='error'><?php echo $userError ?></div>
                        <?php } ?>
                        
                        
                    </div>
                    <div class='col-sm-5'></div>
                </div>
                <div class='form-group'>
                    <div class='col-sm-4 text-right'>Password:</div>
                    <div class='col-sm-3'>
                        <input type='text' class='form-control' id='password' name='password' placeholder='Password' size='6' />
                        
                        <?php if(isset($passError)) { ?>
                            <div class='error'><?php echo $passError ?></div>
                        <?php } ?>
                        
                        
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
</html>



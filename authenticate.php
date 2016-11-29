<?php session_start(); 

extract($_POST);

$var1 = (rand(0,20));
$var2 = (rand(0,20));




if (isset($_SESSION['count'])) {
    $_SESSION['count'] = $_SESSION['count'] + 1;
} else {
    $_SESSION['count'] = 0;
    $_SESSION['countCorrect'] = 0;
}



if ($_POST['answer'] == $_POST['$result']) {
   if (isset($_SESSION['countCorrect'])) {
       $_SESSION['countCorrect'] = $_SESSION['countCorrect'] + 1;
   } else {
       $_SESSION['countCorrect'] = 0;
   }  
}


$var3 = (rand(0,1));
    if ($var3 == 0) {
        $operator = "+";
        $answer = $var1 + $var2;
    } else {
        $operator = "-";
        $answer = $var1 - $var2;
    }

if ($result == answer) {
     echo "Correct.";
} else {
    echo "Incorrect.&nbsp;" . $var1 . "&nbsp;" . $operator . "&nbsp;" . $var2 . "&nbsp;" . "is " . $result;
}
        


/*
if ($result == answer) {
     echo "Correct.";
} else {
    echo "Incorrect.&nbsp;" . $var1 . "&nbsp;" . $operator . "&nbsp;" . $var2 . "&nbsp;" . "is" . "&nbsp;" . $result;
}
*/


echo "<!DOCTYPE HTML>
<html lang='en'>

<head>
	<title>Math Game</title>
    <link href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet' media='screen'>
    <link href='styles/styles.css' rel='stylesheet' />
  <meta charset='utf-8' />
</head>
<body>
    <div class='container'>
        <form action='authenticate.php' method='post' role='form' class='form-horizontal'>
            <div class='row'>
                <div class='col-sm-4 col-sm-offset-4'><h1>Math Game</h1></div>
                <div class='col-sm-4'><a href='logout.php' class='btn btn-default btn-sm'>Logout</a></div>
            </div>
            
            
            <div class='row'>
                <label class='col-sm-2 col-sm-offset-3'>     $var1   </label>
                <label class='col-sm-2'>        $operator   </label>
                <label class='col-sm-2'>     $var2       </label>
                <div class='col-sm-3'></div>
            </div>
            
            

            <input type='hidden' name='first_number' value='$var1' />
            <input type='hidden' name='operation' value='$operator' />
            <input type='hidden' name='second_number' value='$var2' />
            <input type='hidden' name='total' value='$answer' />
            <input type='hidden' name='score' value='0' />

            <div class='form-group'>
                <div class='col-sm-3 col-sm-offset-4'>
                
                
                    <input type='text' class='form-control' id='answer' name='answer' placeholder='Enter answer' size='6'>
                    
            
                    
                    
                </div>
                <div class='col-sm-5'></div>
            </div>
            <div class='row'>
                <div class='col-sm-3 col-sm-offset-4'>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <button type='submit' value='submit' class='btn btn-primary btn-sm'>
                    Submit</button>
                    
                    
                </div>
                <div class='col-sm-3'></div>
            </div>
        </form>
        
        <hr />
        <div class='row'>
            <div class='col-sm-4 col-sm-offset-4'>
            </div>
            <div class='col-sm-4'></div>
        </div>
        <div class='row'>
        
        
            <div class='col-sm-4 col-sm-offset-4'>Score: $_SESSION['count'] / $_SESSION['countCorrect'] </div>
            
            
            
            <div class='col-sm-4'></div>
        </div>
    </div>
</body>
</html>";




/*
if ($result == answer) {
     echo "Correct.";
} else {
    echo "Incorrect.&nbsp;" . $var1 . "&nbsp;" . $operator . "&nbsp;" . $var2 . "&nbsp;" . "is " . $result;
}
*/



/*
if ($_POST['answer'] == $_POST['$result']) {
        echo "";
    
    if(isset($_SESSION['count'])) {
        $_SESSION['count'] = $_SESSION['count'] + 1;
    } else {
        $_SESSION['count'] = 0;
    }
}
    echo "&nbsp;&nbsp;&nbsp;" . $_SESSION['count'];
*/

?>
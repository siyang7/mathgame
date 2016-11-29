<?php session_start(); 


if (!isset($_SESSION['login'])) {
    
    header('Location: login.php');
        
} 
  

extract($_POST);

$firstNum = (rand(0,20));
$secondNum = (rand(0,20));

$operator = (rand(0,1));

if ($operator == 0) {
    $operator = "+";
    $answer = $firstNum + $secondNum;
} else {
    $operator = "-";
    $answer = $firstNum - $secondNum;
}




//counter
if (isset($count)) {
    $count = $count + 1;
} else {
    
    
    $count = 0;
    $countCorrect = 0;
}




if (isset($userAnswer)) {

    if ($answer == $userAnswer) {
        echo "Correct.";
       if (isset($countCorrect)) {
           $countCorrect++;
       } else {
           $countCorrect = 0;
       }  
    } else {
        echo "Incorrect.&nbsp;" . $firstNum . "&nbsp;" . $operator . "&nbsp;" . $secondNum . "&nbsp;" . "is " . $answer;
    }
}

       
/*
if (isset($answer) && isset($userAnswer)) {
    if ($answer == $userAnswer) {

       if (isset($countCorrect)) {

           $countCorrect = $countCorrect + 1;
           echo "<div class='col-sm-4'>Correct.</div>";

       } else {

           echo "<div class='col-sm-4'>Incorrect. $firstNum $operator $secondNum is $answer.</div>";
           $countCorrect = $countCorrect;
       }  
    }
}
*/





/*
// for only allowing numbers
if (is_numeric($answer) {
*/

/*
//only allow numbers
 Trying to add is_numeric to only allow numbers    
}
    else {
        echo "You must enter a number!";
        
    }
*/



?>

<!DOCTYPE HTML>
<html lang='en'>

<head>
	<title>Math Game</title>
    <link href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css' rel='stylesheet' media='screen'>
    <link href='styles/styles.css' rel='stylesheet' />
  <meta charset='utf-8' />
</head>
<body>
    <div class='container'>
        <form action='index.php' method='post' role='form' class='form-horizontal'>
            <div class='row'>
                <div class='col-sm-4 col-sm-offset-4'><h1>Math Game</h1></div>
                <div class='col-sm-4'><a href='logout.php' class='btn btn-default btn-sm'>Logout</a></div>
            </div>
            
            
            <div class='row'>
                <label class='col-sm-2 col-sm-offset-3'><?php echo $firstNum ?></label>
                <label class='col-sm-2'><?php echo $operator ?></label>
                <label class='col-sm-2'><?php echo $secondNum ?></label>
                <div class='col-sm-3'></div>
            </div>
            
            

            <input type='hidden' name='first_number' value='<?php echo $firstNum ?>' />
            <input type='hidden' name='operation' value='<?php echo $operator ?>' />
            <input type='hidden' name='second_number' value='<?php echo $secondNum ?>' />
            <input type='hidden' name='count' value='<?php echo $count ?>' />
            <input type='hidden' name='score' value='<?php echo $countCorrect ?>' />

            <div class='form-group'>
                <div class='col-sm-3 col-sm-offset-4'>
                
                
                    <input type='text' class='form-control' id='userAnswer' name='userAnswer' placeholder='Enter answer' size='6'>
                    
            
                    
                    
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
        
        
            <?php if (isset($countCorrect) && isset( $count))  { ?>
                <div class='col-sm-4 col-sm-offset-4'>Score: <?php echo "$countCorrect / $count" ?>  </div>
            <?php } ?>
            
            
            <div class='col-sm-4'></div>
        </div>
    </div>
</body>
</html>

<?php






/*
// supposed to check if number is corret and see if entered is a number
if ($_SESSION['key]== true) {
    echo "<font color='red'>You must enter a number for your answer.</font>";
} else if ($_SESSION['key] == $answer) {
    $score++;
    echo "<font color='green'>Correct.</font>";
} else if ($_SESSION['key'] !- $answer) {
    echo '<span style="color: red; font-weight: bold;">INCORRECT, $var1 $operator $var2 is $answer</span>';
}
$_SESSION['key'] = $key;
*/











?>
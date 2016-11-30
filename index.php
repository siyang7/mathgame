<?php session_start(); 


if (!isset($_SESSION['login'])) {
    header('Location: login.php');
} 

extract($_POST);




//counter
if (isset($count)) {
    $count = $count + 1;
} else {
    
    
    $count = 0;
    $countCorrect = 0;
}


if (isset($userAnswer) && isset($operator)) {
    
    $answer = 0;
    switch ($operator) {
        case '+':
            $answer = $firstNum + $secondNum;
            break;
        case '-':
            $answer = $firstNum - $secondNum;
            break;
            
    }
    
    //echo "Answer= $answer and userAnswer= $userAnswer and first number = $firstNum and 2nd number is $secondNum"; die();

    if ($answer == $userAnswer) {
        echo "Correct.";
       if (isset($countCorrect)) {
           $countCorrect++;
       } else {
           $countCorrect = 1;
       }  
    } else {
        echo "Incorrect.&nbsp;" . $firstNum . "&nbsp;" . $operator . "&nbsp;" . $secondNum . "&nbsp;" . "is " . $answer;
    }
}


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





        // To only allow numbers to be inputted.
        if (isset($userAnswer)) {
            if (!(is_numeric($userAnswer))) {
                echo "You can't enter non-numbers. Please enter a number.";
                //die();
            }
        
        }





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
            
            

            <input type='hidden' name='firstNum' value='<?php echo $firstNum ?>' />
            <input type='hidden' name='operator' value='<?php echo $operator ?>' />
            <input type='hidden' name='secondNum' value='<?php echo $secondNum ?>' />
            <input type='hidden' name='count' value='<?php echo $count ?>' />
            
            <?php if (isset($countCorrect))  { ?>
            
                <input type='hidden' name='countCorrect' value='<?php echo $countCorrect; ?>' />
                
            <?php } ?>

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
        
        
            <?php if (isset($countCorrect) && isset($count))  { ?>
                <div class='col-sm-4 col-sm-offset-4'>Score: <?php echo "$countCorrect / $count" ?>  </div>
            <?php } ?>
            
            
            <div class='col-sm-4'></div>
        </div>
    </div>
</body>
</html>

<?php










?>
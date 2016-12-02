<?php session_start(); 


if (!isset($_SESSION['login'])) {
    header('Location: login.php');
} 

extract($_POST);


//counter
if (isset($userAnswer) && is_numeric($userAnswer) && !(empty($userAnswer)) && isset($count)) {
    $count = $count + 1;
    
} else {
    if (!isset($userAnswer)) {
        $count = 0;
        $countCorrect = 0;
    }
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
}
    
   


    if (isset($answer) && $answer == $userAnswer) {
        echo "<font color='green'><b>CORRECT.</b></font>";
       if (isset($countCorrect)) {
           $countCorrect++;
       } else {
           $countCorrect = 1;
       }  
    } else {
        
        if (isset($userAnswer)) {
            
            /*
            if (isset($count)) {        // to make count not go up if not numbers are entered
                $count = 0;
            */ 

                if (!(is_numeric($userAnswer))) {
                    
                    //$count = 0;         // don't increment count if no number is entered

                    echo "<font color='red'><b>You can't enter non-numbers. Please enter a number.</b></font>";

                } else {
                    
                    //$count++;           // keep incrementing count if incorrect answer

                    echo "<font color='red'><b>INCORRECT, &nbsp;" . $firstNum . "&nbsp;" . $operator . "&nbsp;" . $secondNum . "&nbsp;" . "was " . $answer . "</b></font>";
                }
                
            //}
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


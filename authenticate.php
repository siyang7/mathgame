<?php session_start(); 

$val1 = int(rand(0,20));
$val2 = int(rand(0,20));

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Math Game</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="styles/styles.css" rel="stylesheet" />
  <meta charset="utf-8" />
</head>
<body>
    <div class="container">
        <form action="index.php" method="post" role="form" class="form-horizontal">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
                <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
            </div>
            <div class="row">
                <label class="col-sm-2 col-sm-offset-3">    <?php echo $val1; ?>  </label>
                <label class="col-sm-2">+</label>
                <label class="col-sm-2">    <?php echo $val2; ?>  </label>
                <div class="col-sm-3"></div>
            </div>

            <input type="hidden" name="first_number" value="6" />
            <input type="hidden" name="operation" value="+" />
            <input type="hidden" name="second_number" value="4" />
            <input type="hidden" name="total" value="0" />
            <input type="hidden" name="score" value="0" />

            <div class="form-group">
                <div class="col-sm-3 col-sm-offset-4">
                    <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
                </div>
                <div class="col-sm-5"></div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-sm-offset-4">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-primary btn-sm">
                    Submit</button>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        
        <hr />
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">Score: 0 / 0</div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>

<?php ?>
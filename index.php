<?php 

$random_password ="";

if($_SERVER['REQUEST_METHOD'] == "POST"){


    
    $lower_case = "abcdefghijklmnopqrstuvwxyz";
    $upper_case = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $numbers = "1234567890";
    $symbols = "!@#$%^&*";
    
    
    $lower_case = str_shuffle($lower_case);
    $upper_case = str_shuffle($upper_case);
    $numbers = str_shuffle($numbers);
    $symbols = str_shuffle($symbols);
     
    
    $random_password = substr($lower_case, 0, 3);
    $random_password .= substr($upper_case, 0, 3);
    $random_password .= substr($numbers, 0, 3);
    $random_password .= substr($symbols, 0, 3);

    


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Random Password Generator</title>
</head>
<body>
    <div class="container">
        <h1>Generate a <br> <span>Random Password</span></h1>
        <form action="index.php" method="post">
        <button class="btn"><img src="images/generate.png" alt="generate icon">Generate Password</button>
        </form>
        <div class="display">
            <h3> <?php echo $random_password; ?> </h3>
        </div>
    </div>
  


</body>
</html>
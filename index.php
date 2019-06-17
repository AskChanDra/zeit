<?php

$var = "";
if($_GET){
  $var = $_GET['var'];
} else {
    $var = "Zeit!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World ! : Zeit</title>
</head>
<body>
  <h1>
  Welcome to Serverless Hosting  <?php echo $var; ?>
  </h1>
    
</body>
</html>


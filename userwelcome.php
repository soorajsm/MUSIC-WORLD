<?php
  require_once "connect.php";
 


  session_start();
if(isset($_SESSION["username"])){
  echo $_SESSION["username"];
  
  echo "hey you are in welcome.php";
}
else
{
  header("Location: userlogin.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="logout.css">
</head>
<body>

                    
<a href="userlogout.php" ><input type="button" class="button" value="Logout" class="haha"></a>


</body>
</html>


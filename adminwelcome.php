<?php

// session_start();


require_once "connect.php";
// $a=$_GET["id"];
// echo $a;
echo "hey you are in admin page";

session_start();
if(isset($_SESSION["admin"])){
  echo $_SESSION["admin"];
  
  echo "hey you are in welcome.php";
}
else
{
  header("Location: adminlogin.php");
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

                    
<a href="adminlogout.php" ><input type="button" class="button" value="Logout" class="haha"></a>
</body>
</html>


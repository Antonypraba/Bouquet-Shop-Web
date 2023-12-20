<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $hostname="localhost"; //local server name default localhost
    $username="root";  //mysql username default is root.
    $password="";       //blank if no password is set for mysql.
    $database="miniproject";  //database name
    $con=new mysqli($hostname,$username,$password,"miniproject");
    if(!$con)
    {
    die('Connection Failed'.mysql_error());
    }else {
      echo "";
    }


    ?>
  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
     $user = $_SERVER ['HTTP_USER_AGENT'];
     echo $user . "</br>";
     $ip = $_SERVER['REMOTE_ADDR'];
     echo $ip . "</br>";
     $serv = $_SERVER['SERVER_NAME'];
     echo $serv . "</br>";
    ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      echo $_SESSION["info"];
     ?>
    <a href="unsetsession.php">Unset Session</a>
  </body>
</html>

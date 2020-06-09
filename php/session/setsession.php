<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

        session_start();
        if($_POST['info'] == "")
        {
          header("Location: enter.php");
        }
        else {
          $_SESSION['info'] = $_POST['info'];
        }


    ?>
    <a href="display.php">Display Info</a>
  </body>
</html>

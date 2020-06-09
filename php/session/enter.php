<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION['info']))
      {
        header("Location: display.php");
      }
     ?>

    <form action="setsession.php" method="post">
      Enter some info
      <input name="info" placeholder="enter some stuff">
      <button type="submit" name="button">Go</button>
    </form>
  </body>
</html>

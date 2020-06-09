<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="onepage.css">
    <title></title>
  </head>
  <body>
    <div class="navbar">
      <h1>Navbar</h1>
    </div>
    <a href="main.php?page=page1">Page 1</a>
    <a href="main.php?page=page2">Page 2</a>
  </body>
    <a href="main.php?page=page3">Page 3</a>
</body>

    <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        include("$page.php");
      }
    ?>
</html>

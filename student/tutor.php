<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="navbar">
      <h1>Tutor groups</h1>
    </div>
    <div class="tutorgroup-info">
      <a href="student.php?tutor-group-name=9ABC">9ABC</a>
    </div>
    <div class="tutorgroup-info">
      <a href="student.php?tutor-group-name=10MTH">10MTH</a>
    </div>
    <div class="tutorgroup-info">
      <a href="student.php?tutor-group-name=11QWE">11QWE</a>
    </div>


    <?php
    /*
      //Connect to SQLiteDatabase
      $dbconnect = mysqli_connect("localhost","root","","studentb");
      if(mysqli_connect_errno()) {
        echo "connection failed".mysqli_connect_errno();
        exit;
      }

      //Get data from SQLiteDatabase
      $student_sql = "SELECT * FROM tutorgroup";
      $student_query = mysqli_query($dbconnect,$student_sql);
      $student_aa = mysqli_fetch_assoc($student_query);

      do
      {
        echo '<div class="tutorgroup-info">'.'<a>'.10MTH</a>' . '</div>';
      } while($student_aa = mysqli_fetch_assoc($student_query));
      */
     ?>
  </body>
</html>

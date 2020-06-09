<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title></title>
  </head>
  <body>
    <div class="navbar">
      <h1>Student Info</h1>
    </div>
    <div class="content-container">
    <?php
      //Connect to SQLiteDatabase
      $dbconnect = mysqli_connect("localhost","root","","studentb");
      if(mysqli_connect_errno()) {
        echo "connection failed".mysqli_connect_errno();
        exit;
      }
      $tutorgroup_to_load = $_GET['tutor-group-name'];
      //Get data from SQLiteDatabase
      $student_sql = "SELECT * FROM student JOIN tutorgroup ON(student.tutorgroupID = tutorgroup.tutorgroupID) WHERE name = '$tutorgroup_to_load'";
      $student_query = mysqli_query($dbconnect,$student_sql);
      $student_aa = mysqli_fetch_assoc($student_query);

      do
      {
        echo '<div class="student-info">'.'<p>'.$student_aa['firstname'] .' ' . $student_aa['lastname'] .'</p>'. '</div>';
      } while($student_aa = mysqli_fetch_assoc($student_query));
     ?>
   </div>
  </body>
</html>

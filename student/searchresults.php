<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Connect to SQLiteDatabase
      $dbconnect = mysqli_connect("localhost","root","","studentb");
      if(mysqli_connect_errno()) {
        echo "connection failed".mysqli_connect_errno();
        exit;
      }
      $name_to_search = $_POST['name_search'];
      //Get data from SQLiteDatabase
      $student_sql = "SELECT * FROM student WHERE (firstname LIKE '%" . $name_to_search . "%') OR (lastname LIKE '%" . $name_to_search . "%') ";
      $student_query = mysqli_query($dbconnect,$student_sql);
      $student_aa = mysqli_fetch_assoc($student_query);


      do
      {
        echo '<b> ID: </b>'.$student_aa['studentID'].'<b> Name: </b>'. $student_aa['firstname'] . ' '. $student_aa['lastname'] . '<br>';
      } while($student_aa = mysqli_fetch_assoc($student_query));

     ?>
  </body>
</html>

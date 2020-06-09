<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      if (is_numeric($_POST['number']))
      {
        $max = $_POST['number'];
        $num = 1;

        do {
          if ($num % 5 == 0 && $num % 3 == 0)
          {
            echo "FizzBuzz";
          }
          else if ($num % 3 == 0)
          {
            echo "Fizz";
          }
          else if ($num % 5 == 0)
          {
            echo "Buzz";
          }
          else
          {
            echo $num;
          }

          echo "<br>";
          $num ++;
        } while ($num <= $max);

      }
      else {
        header("Location: post.php");
      }

     ?>
  </body>
</html>

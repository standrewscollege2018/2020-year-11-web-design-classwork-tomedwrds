<?php
  $title = $_POST['title'];
  $text = $_POST['text'];
  $author = 1;
  $category = 1;

  // Create connection
  $dbconnet = mysqli_connect("localhost","root","","ee");
  //Insert query
  $insert = "INSERT INTO post (name, post_text, author_id, categories_id) VALUES ('$title', '$text', $author,$category)";

  //Run the query
  $dbconnet->query($insert);

  //Create a session to move title to post page so it can be used to load up data
  session_start();
  $_SESSION['post_title'] = $title


  //Go to post page
  header("Location: post.php");

 ?>

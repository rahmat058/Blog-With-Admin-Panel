<?php
    
    include '../libs/database.php';
    include '../libs/config.php';
    include '../functions.php';
    
    // Creating new object of Database
    $db = new database();
    
    // Selecting Category
    $query = "SELECT * FROM categories";
    $cats  = $db->select($query);

    // Inserting Post
    if (isset($_POST['submit'])) {

      $cat   = mysqli_real_escape_string($db->link, $_POST['cat_name']);

      if ($cat == '') {
        echo "Please fill all the fields";
      }else{
        $query = "INSERT INTO categories (title) VALUES ('$cat')";

        $run = $db->insert($query);
      }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/custom.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="">Add Post</a>
          <a class="blog-nav-item" href="">Add Category</a>
          <a class="blog-nav-item pull-right" href="localhost/phpblog">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div>
    </div>

    <div class="container">


      <div class="row">

        <div class="col-sm-12 blog-main">
        <br>
        <h2>Insert New Posts</h2>
        <hr>

        <form action="add_category.php" method="post">
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="cat_name" class="form-control"  placeholder="Enter Category">
            </div>
            

            <button type="submit" name="submit" class="btn btn-success">Add Category</button>
            <a href="index.php" class="btn btn-danger">Cancel</a>
         </form>
          
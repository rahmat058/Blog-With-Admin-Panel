<?php
    
    include 'libs/database.php';
    include 'libs/config.php';
    include 'functions.php';
    
    // Creating new object of Database
    $db = new database();
     
    if (isset($_GET['id'])) {
      $id     = $_GET['id']; 
      $query  = "SELECT * FROM posts WHERE category = '$id'";
      $posts  = $db->select($query);
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

    <title>PHP Blog in OOP</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/custom.css" rel="stylesheet">

    <style>
      .readmore{
            float:right;
            margin-right: 10px;
            background: gray;
            color: white;
            padding: 6px;
          }
       .readmore:hover{
        color: white;
        background: #ff6666;
       }   
    </style>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="posts.php">All Posts</a>
          <a class="blog-nav-item" href="services.php">Services</a>
          <a class="blog-nav-item" href="about.php">About us</a>
          <a class="blog-nav-item" href="contact.php">Contact Us</a>
        </nav>
      </div>
    </div>

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">PHP Tutorials Blog</h1>
        <p class="lead blog-description">It's all about PHP tutorials hacks in Bangla.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
           <?php 
               while($row = $posts->fetch_array()) :   
            ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formateDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <p><?php echo substr($row['content'],0,300); ?></p>

            <a class="readmore" href="single.php?id= <?php echo $row['id']; ?>">Read More</a>

          </div><!-- /.blog-post -->
          <?php endwhile; ?>
 

<?php include 'includes/footer.php'; ?>           
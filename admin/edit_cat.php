<?php
    
    include '../libs/database.php';
    include '../libs/config.php';
    include '../functions.php';
    
    // Creating new object of Database
    $db = new database();

    // Selecting Data
    $cat_id = $_GET['id'];
    $query   = "SELECT * FROM categories WHERE id = '$cat_id'";
    $cat     = $db->select($query);
    $single  = $cat->fetch_array();

    // Selecting Category
    $query = "SELECT * FROM categories";
    $cats  = $db->select($query);

    // Update Post
    if (isset($_POST['update'])) {

      $cat   = mysqli_real_escape_string($db->link, $_POST['title']);

      if ($cat =='') {
        echo "Please fill all the fields";
      }else{
        $query = "UPDATE categories SET title='$cat' WHERE id='$cat_id'";

        $run = $db->update($query);
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
        <h2>Update Category</h2>
        <hr>

        <form action="edit_cat.php?id=<?php echo $cat_id; ?>" method="post">
            <div class="form-group">
              <label>Category Name</label>
              <input type="text" name="title" class="form-control"  placeholder="Enter Title" value="<?php echo $single['title']; ?>">
            </div>

            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-info">Cancel</a>
            <a href="delete_cat.php?delete_id=<?php echo $cat_id; ?>" class="btn btn-danger">Delete</a>
         </form>
          
<?php
    
    include '../libs/database.php';
    include '../libs/config.php';
    include '../functions.php';
    
    // Creating new object of Database
    $db = new database();

    // Selecting Data
    $post_id = $_GET['id'];
    $query   = "SELECT * FROM posts WHERE id = '$post_id'";
    $post    = $db->select($query);
    $single  = $post->fetch_array();

    // Selecting Category
    $query = "SELECT * FROM categories";
    $cats  = $db->select($query);

    // Update Post
    if (isset($_POST['update'])) {

      $title   = mysqli_real_escape_string($db->link, $_POST['title']);
      $content = mysqli_real_escape_string($db->link, $_POST['content']);
      $author  = mysqli_real_escape_string($db->link, $_POST['author']);
      $tags    = mysqli_real_escape_string($db->link, $_POST['tags']);
      $cat     = mysqli_real_escape_string($db->link, $_POST['cat']);

      if ($title =='' || $content=='' || $author=='' || $tags=='' || $cat=='') {
        echo "Please fill all the fields";
      }else{
        $query = "UPDATE posts SET category='$cat', title='$title', content='$content', author='$author', tags='$tags' WHERE id='$post_id'";

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
        <h2>Update Posts</h2>
        <hr>

        <form action="edit_post.php?id=<?php echo $post_id; ?>" method="post">
            <div class="form-group">
              <label>Post Title</label>
              <input type="text" name="title" class="form-control"  placeholder="Enter Title" value="<?php echo $single['title']; ?>">
            </div>
            <div class="form-group">
              <label>Content</label>
              <textarea name="content" class="form-control" cols="25" rows="5" placeholder="Enter Content"><?php echo $single['content']; ?></textarea>
            </div>

            <select name="cat" class="form-control">
                <option>Select a Category</option>
                <?php while($row = $cats->fetch_array()) : ?>
                   <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                <?php endwhile; ?>
            </select>

            <div class="form-group">
              <label>Author Name</label>
              <input type="text" name="author" class="form-control"  placeholder="Enter Author Name" value="<?php echo $single['author']; ?>">
            </div>
            <div class="form-group">
              <label>Tags</label>
              <input type="text" name="tags" class="form-control"  placeholder="Enter Tags" value="<?php echo $single['tags']; ?>">
            </div>

            <button type="submit" name="update" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-info">Cancel</a>
            <a href="delete_post.php?delete_id=<?php echo $post_id; ?>" class="btn btn-danger">Delete</a>
         </form>
          
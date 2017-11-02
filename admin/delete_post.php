<?php
    
    include '../libs/database.php';
    include '../libs/config.php';
    include '../functions.php';
    
    // Creating new object of Database
    $db = new database();

    // Delete Post
    if (isset($_GET['delete_id'])) {
       $delete_id = $_GET['delete_id'];
       $query     = "DELETE  FROM posts WHERE id = '$delete_id'";
       $run       = $db->delete($query);

    }
?>
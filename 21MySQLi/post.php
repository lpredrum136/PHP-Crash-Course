<?php
require 'config/config.php';
require 'config/db.php';

if (isset($_POST['delete'])) {
  $delete_id = mysqli_escape_string($connection, $_POST['delete_id']);

  $query = "DELETE FROM posts WHERE id = $delete_id";

  if (mysqli_query($connection, $query)) header('Location: ' . ROOT_URL);
  else echo 'ERROR: ' . mysqli_error($connection);
}

// Get Post ID
$id = mysqli_real_escape_string($connection, $_GET['id']);

// Create query
$query = "SELECT * FROM posts WHERE id = $id";

// Get result
$result = mysqli_query($connection, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($connection);
?>

<?php include 'inc/header.php' ?>
<div class="container">
  <a href="<?php echo ROOT_URL ?>" class="btn btn-info">Back to Posts</a>

  <h1><?php echo $post['title'] ?></h1>
  <div class="card bg-primary text-white my-3">
    <div class="card-body">
      <small>Created on <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?></small>
      <p><?php echo $post['body'] ?></p>
      <hr>

      <a href="<?php echo ROOT_URL ?>editpost.php?id=<?php echo $post['id'] ?>" class="btn btn-warning d-inline">Edit</a>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" class="d-inline float-right">
        <input type="hidden" name="delete_id" value="<?php echo $post['id'] ?>">
        <input type="submit" name="delete" value="Delete" class="btn btn-danger">
      </form>
    </div>
  </div>
</div>
<?php include 'inc/footer.php' ?>
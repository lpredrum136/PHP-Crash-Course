<?php
require 'config/config.php';
require 'config/db.php';

// Check submit
if (isset($_POST['submit'])) {
  // Get form data
  $update_id = mysqli_escape_string($connection, $_POST['update_id']);
  $title = mysqli_escape_string($connection, $_POST['title']);
  $author = mysqli_escape_string($connection, $_POST['author']);
  $text = mysqli_escape_string($connection, $_POST['text']);

  $query = "UPDATE posts SET title = '$title', author = '$author', body = '$text' WHERE id = $update_id";
  // die($query);

  if (mysqli_query($connection, $query)) header('Location: ' . ROOT_URL);
  else echo 'ERROR: ' . mysqli_error($connection);
}

// Get post ID
$id = mysqli_escape_string($connection, $_GET['id']);

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
  <h1>Edit Post</h1>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" value="<?php echo $post['title'] ?>">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" name="author" id="author" class="form-control" value="<?php echo $post['author'] ?>">
    </div>
    <div class="form-group">
      <label for="text">Text</label>
      <textarea type="text" name="text" id="text" class="form-control"><?php echo $post['body'] ?></textarea>
    </div>
    <input type="hidden" name="update_id" value="<?php echo $post['id'] ?>">
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
  </form>
</div>
<?php include 'inc/footer.php' ?>
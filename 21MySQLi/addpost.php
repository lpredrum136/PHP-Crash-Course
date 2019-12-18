<?php
require 'config/config.php';
require 'config/db.php';

// Check for submit
if (isset($_POST['submit'])) {
  // Get form data
  $title = mysqli_real_escape_string($connection, $_POST['title']);
  $text = mysqli_real_escape_string($connection, $_POST['text']);
  $author = mysqli_real_escape_string($connection, $_POST['author']);

  $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$text')";

  if (mysqli_query($connection, $query)) {
    header("Location: " . ROOT_URL);
  } else {
    echo 'ERROR: ' . mysqli_error($connection);
  }
}
?>

<?php include 'inc/header.php' ?>
<div class="container">
  <h1>Add Post</h1>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" name="author" id="author" class="form-control">
    </div>
    <div class="form-group">
      <label for="text">Text</label>
      <textarea type="text" name="text" id="text" class="form-control"></textarea>
    </div>
    <input type="submit" value="Submit" name="submit" class="btn btn-primary">
  </form>
</div>
<?php include 'inc/footer.php' ?>
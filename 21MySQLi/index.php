<?php
require 'config/config.php';
require 'config/db.php';


// Create query
$query = 'SELECT * FROM posts ORDER BY created_at DESC';

// Get Result
$result = mysqli_query($connection, $query);

// Fetch Data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free Result
mysqli_free_result($result);

// Close connection
mysqli_close($connection);

// Display
// var_dump($posts);
?>

<?php include 'inc/header.php' ?>
<div class="container">
  <h1>Posts</h1>
  <?php foreach ($posts as $post) : ?>
    <div class="card bg-primary text-white my-3">
      <div class="card-body">
        <h3>
          <?php echo $post['title'] ?>
        </h3>
        <small>Created on <?php echo $post['created_at'] ?> by <?php echo $post['author'] ?></small>
        <p><?php echo $post['body'] ?></p>
        <a href="post.php?id=<?php echo $post['id'] ?>" class="btn btn-info">Read More</a>
        <a href="<?php echo ROOT_URL ?>post.php?id=<?php echo $post['id'] ?>" class="btn btn-info">Read More (same)</a>
      </div>
    </div>
  <?php endforeach ?>
</div>
<?php include 'inc/footer.php' ?>
<?php
if (isset($_POST['submit'])) {
  $name = htmlentities($_POST['name']);

  setcookie('username', $name, time() + 3600); // 1 hour

  header('Location: page2.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Cookies</title>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="name" placeholder="Enter Name">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>
<?php
// Message Vars
$msg = '';
$msgClass = '';

// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
  // echo 'Submitted';

  // Get Form Data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Check required fields (all)
  if (!empty($name) && !empty($email) && !empty($message)) {
    // Passed
    // Check Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $msg = 'Please provide valid email';
      $msgClass = 'alert-danger';
    } else {
      $toEmail = 'nguyenhai1591@gmail.com';
      $subject = "Contact Request from $name";
      $body = "
        <h2>Contact Request</h2>
        <h4>Name</h4>
        <p>$name</p>
        <h4>Email</h4>
        <p>$email</p>
        <h4>Message</h4>
        <p>$message</p>
      ";

      // Email headers
      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html;charset=UTF-8\r\n";

      // Additional Headers
      $headers .= "From: $name<$email>\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        // Email sent
        $msg = 'Email sent successfully';
        $msgClass = 'alert-success';
      } else {
        // Failed:
        $msg = 'Failed to send email';
        $msgClass = 'alert-danger';
      }
    }
  } else {
    // Failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contact Us</title>
  <!--Bootstrap CSS-->
  <link href="https://bootswatch.com/4/cosmo/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">My Website</a>
  </nav>
  <div class="container my-3">
    <?php if ($msg != '') : ?>
      <div class="alert <?php echo $msgClass ?>">
        <?php echo $msg ?>
      </div>
    <?php endif ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($name) ? $name : '' ?>">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($email) ? $email : '' ?>">
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control">
          <?php echo isset($message) ? $message : '' ?>
        </textarea>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</body>

</html>
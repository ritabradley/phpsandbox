<?php

$msg = '';
$msgClass = '';
if (filter_has_var(INPUT_POST, 'submit')) :
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (!empty($name) && !empty($email) && !empty($message)) :
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) :
      $msg = 'Please enter a valid email';
      $msgClass = 'alert-danger';
    else :
      // Passed
      $toEmail = 'contact@ritabradley.com';
      $subject = "Contact request from $name";
      $body = "<h2>Contact Request</h2>
      <h4>Name</h4><p>$name</p>
      <h4>Email</h4><p>$email</p>
      <h4>Message</h4><p>$message</p>";

      // Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= " Content-Type:text/html;charset=UTF-8" . "\r\n";

      // Additional Headers
      $headers .= "From: $name <$email>" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) :
        $msg = "Your email was sent!";
        $msgClass = 'alert-success';
      else :
        $msg = "Your email failed to send.";
        $msgClass = 'alert-danger';
      endif;

    endif;
  else :
    $msg = 'Please enter all fields';
    $msgClass = 'alert-danger';
  endif;
endif;
?>

<!doctype html>
<html lang="en">

<head>
  <title>Contact</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://bootswatch.com/4/sketchy/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">This Site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container">
    <?php if ($msg != '') : ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <fieldset>
        <div class="form-group">
          <label for="name">Name</label>
          <input value="<?php echo isset($_POST['name']) ? $name : ''; ?>" type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input <?php echo isset($_POST['email']) ? $email : ''; ?> type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="messageBox">Message</label>
          <textarea <?php echo isset($_POST['message']) ? $message : ''; ?> name="message" class="form-control" id="messageBox" rows="3"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
  </div>
</body>

</html>
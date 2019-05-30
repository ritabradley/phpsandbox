<?php if (isset($_POST['name'])) {
  echo htmlentities($_POST['name']);
} ?>
<?php echo "<br>"; ?>
<?php
if (isset($_POST['email'])) {
  echo htmlentities($_POST['email']);
}; ?>

<!doctype html>
<html lang="en">

<head>
  <title>Get & Post</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form method="POST" action="get_post.php">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Name..." aria-describedby="helpId">
        <small id="helpId" class="text-muted">Enter your name.</small>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Email Address...">
        <small id="emailHelpId" class="form-text text-muted">Enter your email address.</small>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>



</body>

</html>
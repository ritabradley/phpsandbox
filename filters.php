<!-- Check for posted data -->
<!-- <?php
      if (filter_has_var(INPUT_POST, 'data')) :
        echo 'Data found';
      else :
        echo "No data";
      endif; ?> -->

<!-- <?php
      if (filter_has_var(INPUT_POST, 'data')) :
        $email = $_POST['data'];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_input($email, FILTER_VALIDATE_EMAIL)) :
          echo "Email is valid";
        else :
          echo "Invalid email";
        endif;
      endif; ?> -->

<!-- Integer validation -->
<?php
$data = "title";
if (filter_var($data, FILTER_VALIDATE_INT)) :
  echo "$data is a number";
else :
  echo "$data is not a number";
endif;
?>


<!doctype html>
<html lang="en">

<head>
  <title>Filters</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="form-group">
        <label for="data"></label>
        <input type="text" name="data" id="data" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>
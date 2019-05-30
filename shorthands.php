<?php
$loggedIn = false;
$isRegistered = ($loggedIn) ? true : false;
// Ternary

/* echo ($loggedIn) ? 'You\'re logged in <br>' : 'Please log in <br>';
echo ($isRegistered) ? 'Welcome!' : 'Please register for an account'; */
?>

<?php
if ($loggedIn) :
  echo "<h1>Welcome Admin!</h1>";
else :
  echo "<h1>Welcome Guest</h1>";
endif;
?>
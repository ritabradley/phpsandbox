<?php
# $_SERVER SUPERGLOBAL

// Create Server Array

$server = [
  'Host Server Name' => $_SERVER['SERVER_NAME'],
  'Host Header' => $_SERVER['HTTP_HOST'],
  'Server Software' => $_SERVER['SERVER_SOFTWARE'],
  'Document Root' => $_SERVER['DOCUMENT_ROOT'],
  'Current Page' => $_SERVER['PHP_SELF']
];

// Create Client Array
$client = [
  'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
  'Client IP' => $_SERVER['REMOTE_ADDR'],
  'Client Port' => $_SERVER['REMOTE_PORT']
];
/* echo $server['Host Server Name']; # Prints server name ('localhost')
echo "<br>";
echo $server['Host Header']; # Prints host header (in this case is also 'localhost')
echo "<br>";
echo $server['Server Software']; # Prints the software the server is using (Apache)
echo "<br>";
echo $server['Document Root']; # Print root directory of the script being executed
echo "<br>";
echo $server['Current Page']; # Print filename of currently running script
echo "<br>"; */

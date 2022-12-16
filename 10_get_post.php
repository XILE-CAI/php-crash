<?php

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/
echo $_GET['name'], $_GET['age'];
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=BRYAN&age=26">Click</a>
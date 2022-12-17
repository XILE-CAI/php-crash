<?php 
/* ---------- File Handling --------- */

/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/user.txt';

if(file_exists($file)){
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle,filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file,'w');
    $contents = 'bryan' . PHP_EOL .'John'.PHP_EOL.'json';
    fwrite($handle,$contents);
    fclose($handle);
}

?>
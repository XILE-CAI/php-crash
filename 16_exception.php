<?php

/* ----------- Exceptions ----------- */

/*
  PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverser($x){
    if($x==0){
        throw new Exception('Division by 0');
    }
    return 1/$x;
}

// echo inverser(1);

try{
    echo inverser(0);
    echo inverser(6);
    // echo inverser(0);
}catch(Exception $e){
    echo 'Caught Exception', $e->getMessage(),' ';
}finally{
    echo 'First Finally';
}
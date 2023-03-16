<?php
// A user-defined error handler function
function myErrorHandler($errno, $errstr, $errfile, $errline) {
    echo "<b>Custom error:</b> [$errno] $errstr<br>";
    echo " Error on line $errline in $errfile<br>";
}

// Set user-defined error handler function
set_error_handler("myErrorHandler");

$test=2;
$denominator = 0;

// Trigger error
if ($denominator==0) {
    trigger_error("You can't do this operation");
}
?>
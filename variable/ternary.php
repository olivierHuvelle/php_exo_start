<?php
/*
1. In a new file `ternary.php` declare a `$hello` variable which value is a greeting message. 
That greeting message depends on another variable `$gender`, which can either be "M" or "F". Finish by displaying the resulting message.
*/
$gender = 'F'; 
$hello = ($gender == 'M') ? 'Hello Boy' : 'Hello girl'; 
echo $hello; 
?>
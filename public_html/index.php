<h1>My PHPmm</h1>
<?php 
$myval = "hello world";
$myValue1 = 20;
echo $myval . "welcome " . $myValue1;
?>
<br>
<?php 
 echo "this is my php {$myval}{$myValue1}"
?>
<br>
<?php
$myValue2 = 100;
$myValue3 = $myValue1 + $myValue2  ;
echo "this is myValue {$myValue3}";
echo "<br><hr>" 

?>
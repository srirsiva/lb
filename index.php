<?php
 
if ($_SERVER['SERVER_ADDR'] == '10.1.20.6') {
  $dcname = 'DC1';
} elseif ($_SERVER['SERVER_ADDR'] == '10.1.20.7') {
  $dcname = 'DC2';
} else {
  $dcname = 'DC3';
}
 
print "
Hello, World! This is $dcname.
Server Address is ".$_SERVER['SERVER_ADDR'].".
===---===
HTTP Request Method: ".$_SERVER['REQUEST_METHOD']."
HTTP Host Header: ".$_SERVER['HTTP_HOST']."
HTTP URI: ".$_SERVER['REQUEST_URI']."
";
 
$body = file_get_contents('php://input');
print "Body: \n$body\n";
?>

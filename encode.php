<?php 

$str = 1; 

$customer_id= urlencode(base64_encode($str)); 

echo $decoded_id = base64_decode(urldecode($customer_id)); 

?> 
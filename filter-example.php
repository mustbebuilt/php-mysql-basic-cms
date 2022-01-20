<?php
/////// SERVER SIDE Validation and Sanitization Filters
/////// DEMO FILE FOR THE USE OF filter_var
// XSS - Cross Site Scripting
// $testData = "<script>alert('hi')</script>";
$testData = "somesomewhere.com";

if(filter_var($testData, FILTER_VALIDATE_INT)){
    echo "Is Integer";
}else{
    echo "Not Integer";
}

echo "<hr>";

 $testData = filter_var($testData, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
    echo $testData;

echo "<hr>";

if(filter_var($testData, FILTER_VALIDATE_EMAIL)){
    echo "Is validate email";
}else{
    echo "Not an email";
}



?>
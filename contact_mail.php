<?php

$toEmail = "lmorgans90@gmail.com";
$mailHeaders = "From: " . $_POST["userName"] . "<". $_POST["userEmail"] .">\r\n";

if(mail($toEmail, $_POST["subject"], $_POST["content"], $mailHeaders)) 
    
    { // if true, send html message to div 
        print "<p class='success'>Your message has been sent, we will reply as soon as possible</p>";
    } 

else // if false send html message to div
    
    {
        print "<p class='Error'>Oops! There's been a problem, please try again!</p>";
    }

?>
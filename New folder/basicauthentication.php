// Basic Authentication System
<?php
define("USERNAME","Istahadul");
define("PASSWORD","12345678");


echo"Enter your name :";
$username=readline();

echo"Enter your password:";
$password=readline();

if($username==USERNAME && $password==PASSWORD)
        {
                echo"Login completed";
        }
        else
        {
                if($username==USERNAME)
                {
                        echo"Your password is incorrect";
                }
                else
                {
                        echo"Your name is incorrect";
                }
        }
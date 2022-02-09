<?php

$resources = BASE_PATH.'resources/';

if(isset($_GET['page'])) {
    switch ($_GET['page']) {

        default: echo "404 ERROR";  break;

        //index
        case "welcome": include($resources . "welcome.php");  break;

        // Example add new Page -> !* First See public/.htaccess *!
        // in this file -> case "costumname": include($resources . "filename.php");  break; 
        // (File in resources/welcome.php OR you can do resources/direct/filename.php -> case "costumname": include($resources . "direct/filename.php");)

    }

} else {
    die('please enable .htaccess on your server');
}
<?php 
require_once('./includes/routes/Routes.php');


function __autoload($class_name) {
    if(file_exists('./includes/classes/'.$class_name.'.php')){
        require_once './includes/classes/'.$class_name.'.php';
    }
    else if (file_exists('./includes/controllers/'.$class_name.'.php'))
    {
        require_once './includes/controllers/'.$class_name.'.php';
    }
    
}
error_reporting(E_ALL ^ E_DEPRECATED);
?>
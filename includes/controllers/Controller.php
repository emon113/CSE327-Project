<?php

class Controller extends Database {
public static function createView($viewName){
    require_once './includes/views/'.$viewName.'.php';
    
}
}
?>
<?php
session_start();

//Default view parameters


//Get the possible controllers
include_once('controllers.php');

//Check if a controller parameter is supplied
if(isset($_GET['controller'])){

    $controller = htmlspecialchars($_GET['controller']);

    //If the controller parameter is in the controllers array, include it
    if(in_array($controller, $controllers)){
        include_once('../web/controllers/' . $controller . '.php');
    }
    //Else grab the default
    else{
        include_once('../web/controllers/home.php');
    }
}
//No param, so grab the default
else{
    include_once('../web/controllers/home.php');
}

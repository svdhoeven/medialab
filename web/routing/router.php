<?php
session_start();

//Check if a controller parameter is supplied
if(isset($_GET['controller'])){

    $controller = htmlspecialchars($_GET['controller']);

    //If the controller parameter is in the controllers array, include it
    if(file_exists('../web/controllers/' . $controller . '.php')){
        include_once('../web/controllers/' . $controller . '.php');
    }
    //Else grab the default
    else{
        include_once('../web/controllers/questionnaire.php');
    }
}
//No param, so grab the default
else{
    include_once('../web/controllers/questionnaire.php');
}

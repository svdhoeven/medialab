<?php

if(isset($pageData) && is_array($pageData)){

    //Include the requested view
    if(isset($pageData['view']) && !empty($pageData['view'])){
        $view = htmlspecialchars($pageData['view']);
        include_once("../web/views/{$view}.php");
    }
}
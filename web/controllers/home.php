<?php
//Check if a specific view is requested
if(isset($_GET['view'])) {

    //Set view parameters if the specified view exists
    switch(htmlspecialchars($_GET['view'])){
        case 'index':
            $pageData = [
                'title' => 'Home',
                'view' => 'home/index',
                'background' => ''
            ];
            break;
        case 'test':
            $pageData = [
                'title' => 'Test',
                'view' => 'home/test',
                'background' => ''
            ];
            break;
    }
}
//Default page if no specific view was requested
else{
    $pageData = [
        'title' => 'Home',
        'view' => 'home/index',
        'background' => ''
    ];
}

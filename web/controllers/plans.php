<?php
if(isset($_GET['view'])) {

    //Set view parameters if the specified view exists
    switch(htmlspecialchars($_GET['view'])){

        default:
            $pageData = [
                'title' => 'Gemeenteplannen',
                'view' => 'plans/index',
                'background' => ''
            ];
            break;

        case 'detail':
            $pageData = [
                'title' => 'Plan in Schiebroek',
                'view' => 'plans/detail',
                'background' => ''
            ];
            break;
    }
}
else{
    $pageData = [
        'title' => 'Gemeenteplannen',
        'view' => 'plans/index',
        'background' => ''
    ];
}
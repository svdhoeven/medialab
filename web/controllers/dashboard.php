<?php
if(isset($_POST['signup_submit'])){
    $_SESSION['name'] = $_POST['firstName'] . ' ' . $_POST['lastName'];
}

if(isset($_GET['view'])) {

    //Set view parameters if the specified view exists
    switch(htmlspecialchars($_GET['view'])){

        /**
         * Index
         */
        default:
            $pageData = [
                'title' => 'Dashboard',
                'view' => 'dashboard/index',
                'background' => ''
            ];
            break;

        case 'forum':
            $pageData = [
                'title' => 'Vragen stellen',
                'view' => 'dashboard/forum',
                'background' => ''
            ];
            break;

        case 'needs':
            $answers = [];
            if(isset($_SESSION['answers'])){
                $answers = $_SESSION['answers'];
            }

            $pageData = [
                'title' => 'Behoeften',
                'view' => 'dashboard/needs',
                'background' => '',
                'answers' => $answers,
                'questions' => [
                    1 => 'Meer groen in de wijk zoals bomen, parkjes en bloemen?',
                    2 => 'Genoeg speelplaatsen voor de jongere bewoners?',
                    3 => 'Voldoende parkeerplek bij uw huis?',
                    4 => 'Hondenparkjes om uw hond uit te laten?',
                    5 => 'Meer vuilnisbakken in de wijk om zwerfafval te voorkomen?',
                    6 => 'Vaker een bewonersavond om gemeente plannen te bespreken?',
                    7 => 'Inzicht in de bouwplannen in uw buurt?',
                    8 => 'Meer contact met de gemeente om uw mening te delen over de buurt?',
                    9 => 'Meer gelegenheden voor openbaar vervoer in uw wijk?',
                    10 => 'Meer bankjes bij u in het park?'
                ]
            ];
            break;
    }
}
else{
    $pageData = [
        'title' => 'Dashboard',
        'view' => 'dashboard/index',
        'background' => ''
    ];
}
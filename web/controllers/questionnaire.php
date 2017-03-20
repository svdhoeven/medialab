<?php
//Check if a specific view is requested
if(isset($_GET['view'])) {

    //Set view parameters if the specified view exists
    switch(htmlspecialchars($_GET['view'])){
        case 'submit':
            //Get current question session
            if(isset($_SESSION['currentQuestion'])){
                $currentQuestion = $_SESSION['currentQuestion'];
            }
            else{
                $currentQuestion = 1;
                $_SESSION['currentQuestion'] = $currentQuestion;
            }

            //Get answers session if available, otherwise set it to an array
            if(isset($_SESSION['answers'])){
                $answers = $_SESSION['answers'];
            }
            else{
                $answers = [];
                $_SESSION['answers'] = $answers;
            }

            //Get post if available
            if(isset($_POST['submit'])){

                //Add answer to answers session array, or update it
                $answers[$_POST['number']] = $_POST['answer'];

                //Save session
                $_SESSION['answers'] = $answers;

                if($currentQuestion < 10){
                    //"Go" to next question
                    $currentQuestion = $_POST['number'] + 1;
                    $_SESSION['currentQuestion'] = $currentQuestion;

                    header('Location: questionnaire'); die;
                }
                else{
                    header('Location: questionnaire-thank_you'); die;
                }
            }

            header('Location: questionnaire'); die;
            break;

        case 'thank_you':
            //Redirect back to questionnaire if no answers
            if(isset($_SESSION['answers'])){
                $answers = $_SESSION['answers'];
            }
            else{
                header('Location: questionnaire'); die;
            }

            $pageData = [
                'title' => 'Bedankt voor uw deelname',
                'view' => 'questionnaire/thank_you',
                'background' => ''
            ];
            break;
    }
}
//Default page if no specific view was requested
else{
    $questions = [
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
    ];

    //Get current question session
    if(isset($_SESSION['currentQuestion'])){
        $currentQuestion = $_SESSION['currentQuestion'];
    }
    else{
        $currentQuestion = 1;
        $_SESSION['currentQuestion'] = $currentQuestion;
    }

    //Get answers session if available, otherwise set it to an array
    if(isset($_SESSION['answers'])){
        $answers = $_SESSION['answers'];
    }
    else{
        $answers = [];
        $_SESSION['answers'] = $answers;
    }

    //Send default page parameters
    $pageData = [
        'title' => 'Uw behoeftes',
        'view' => 'questionnaire/index',
        'background' => ''
    ];
}
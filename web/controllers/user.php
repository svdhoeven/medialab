<?php
if(isset($_GET['view'])) {

    //Set view parameters if the specified view exists
    switch(htmlspecialchars($_GET['view'])){

        /**
         * Sign up
         */
        case 'sign_up':
            $pageData = [
                'title' => 'Inschrijven',
                'view' => 'user/sign_up',
                'background' => ''
            ];
            break;
    }
}
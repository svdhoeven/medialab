import _ from 'underscore';
import $ from 'jquery';
import jQuery from 'jquery';
import {Events} from 'backbone';

import Questionnaire from './views/Questionnaire.view';

//Styling
import '../sass/main.scss';

window.$ = $;
window.jQuery = jQuery;

(function ()
{
    let setGlobalVariables = function ()
    {
        window.App = {};
        App.events = _.clone(Events);
    };

    /**
     * Run after dom is ready
     */
    let init = function ()
    {
        setGlobalVariables();

        $('#frikandel')
            .animate(
                {
                    'font-size': '100px'
                },
                1000
            );

        if($('.questionnaire-question_wrapper').length > 0){
            new Questionnaire({el: '.questionnaire-question_wrapper'});
        }

        Backbone.history.start({pushState: true, root: '/bierturven2/'});

        $(window).on('resize', resizeHandler);
    };

    let resizeHandler = function(){
        Backbone.trigger('resize');
    };

    window.addEventListener('load', init);
})();
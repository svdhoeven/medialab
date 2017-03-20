import {View} from 'backbone';

/**
 * Global view for functions used in all exercises
 */
const Questionnaire = View.extend({
    events: {
        'submit .questionnaire-question_form': 'formSubmitHandler'
    },

    initialize: function ()
    {

    },

    formSubmitHandler: function(e){
        if($('.questionnaire-radio_wrapper input:checked').length < 1){
            e.preventDefault();
            alert('U moet een antwoord kiezen');
        }
    },
});

module.exports = Questionnaire;

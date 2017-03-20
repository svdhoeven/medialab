<div class="questionnaire-title_wrapper" style="background-image: url('img/questionnaire_background.jpg');">
    <h1>Maak de gemeente beter en geef uw mening!</h1>
</div>

<div class="questionnaire-question_wrapper">
    <div class="questionnaire-pagination question-<?=$currentQuestion?>">
        <div class="questionnaire-pagination_value"><?=$currentQuestion?>/10</div>
    </div>

    <form class="questionnaire-question_form" method="post" action="questionnaire-submit" novalidate>

        <label class="questionnaire-question">
            <span class="questionnaire-question_label"><?=$currentQuestion?>. Heeft u behoefte aan... ?</span>

            <span class="questionnaire-question_value"><?= isset($currentQuestion) && isset($questions[$currentQuestion]) ? $questions[$currentQuestion] : 'Interne fout'?></span>
        </label>

        <div class="questionnaire-answers">

            <div class="questionnaire-radio_wrapper">
                <input id="questionnaire-radio-agree" type="radio" name="answer" value="3" required/>

                <label for="questionnaire-radio-agree" class="agree">
                    Eens
                </label>
            </div>

            <div class="questionnaire-radio_wrapper">
                <input id="questionnaire-radio-neutral" type="radio" name="answer" value="2"/>

                <label for="questionnaire-radio-neutral" class="neutral">
                    Neutraal
                </label>
            </div>

            <div class="questionnaire-radio_wrapper">
                <input id="questionnaire-radio-disagree" type="radio" name="answer" value="1"/>

                <label for="questionnaire-radio-disagree" class="disagree">
                    Oneens
                </label>
            </div>

        </div>

        <input type="number" name="number" hidden value="<?= isset($currentQuestion) ? $currentQuestion : 1 ?>"/>

        <input type="submit" value=">" name="submit" class="questionnaire-submit"/>
    </form>
</div>
<?php
$currentPage = 'needs';
include_once("../web/views/dashboard/menu.php");
?>
<main class="needs">
    <table>
        <thead>
            <tr>
                <td>Vraag</td>
                <td>Behoefte</td>
                <td>Eens</td>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach($pageData['questions'] as $i => $question){
            ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $question ?></td>
                <td class="
                    <?php
                    if(isset($pageData['answers'][$i])){
                        if($pageData['answers'][$i] == 1){
                            echo 'disagree';
                        }
                        else if($pageData['answers'][$i] == 2){
                            echo 'neutral';
                        }
                        else{
                            echo 'agree';
                        }
                    }
                    ?>
                ">
                    <?php
                    if(isset($pageData['answers'][$i])){
                        if($pageData['answers'][$i] == 1){
                            echo 'Oneens';
                        }
                        else if($pageData['answers'][$i] == 2){
                            echo 'Neutraal';
                        }
                        else{
                            echo 'Eens';
                        }
                    }
                    ?>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</main>

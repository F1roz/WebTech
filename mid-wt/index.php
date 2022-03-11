<?php


$file = file_get_contents("questions.json");

$all_questions = json_decode($file);

print_r($all_questions[0]->name);

$math_ques = $all_questions[0];

?>

<h1> Course Name : <?=$math_ques->name?></h1>

<h2>Answer to the following questions</h2>

<?php

foreach ($math_ques->questions as $question) {
    ?>
   <h3> <?=$question->question?> </h3>
   <ul>
   <?php
   foreach ($question->options as $option) {
      ?>
        <li>
            <?=$option?>
        </li>
      <?php
   }
   ?>
   </ul>
   <h3>
Correct Answer : 
       <?=$question->correct?>
    </h3>
   <?php
}
<?php

$questions = [
  ['question' => 'What is 5 + 5?', 'correct' => '10'],
  ['question' => 'Who is our prophet? ?', 'correct' => 'mohamad'],
  ['question' => 'Hypertext Preprocessor is short from "?', 'correct' => 'php'],
  ];
  // Collect answers from the user
  $answers = [];
  foreach ($questions as $index => $question) {
  echo ($index + 1) . ". " . $question['question'] . "\n";
  $answers[] = trim(readline("Your answer: "));
  }
  // Calculate score and provide feedback
  $score = evaluateQuiz($questions, $answers);
  echo "\nYou scored $score out of " . count($questions) . ".\n";
  if ($score === count($questions)) {
  echo "Excellent Result !\n";
  } elseif ($score > 1) {
  echo "Not bad but not enough !\n";
  } else {
  echo "OHH BAD LUCK!! Try to skill up!\n";
  }
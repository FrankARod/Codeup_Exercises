<?php

$quiz = ['question 1' => array('question' => 'Did this question print?',
							   'answers' => array('a' => 'No',
												  'b' => 'Yeah',
												  'c' => 'Sorta',
												  'd' => 'Uhhh'),
							   'correct_answer' => 'b'),
		 'question 2' => array('question' => 'Who is the President of the United States',
							   'answers' => array('a' => 'Barack Obama',
												  'b' => 'Arnold Schwarzenegger',
												  'c' => 'George Costanza',
												  'd' => 'Richard Stallman'),
							   'correct_answer' => 'a'),
		 'question 3' => array('question' => 'What is 1 + 3?',
							   'answers' => array('a' => '5',
												  'b' => '8',
												  'c' => '4',
												  'd' => 'U'),
							   'correct_answer' => 'c')];
$question_num = 1;
foreach($quiz as $question) {
	echo "$question_num. {$question['question']}\n\n";
	foreach ($question['answers'] as $letter => $answer) {
		if ($letter != $question['correct_answer']) {
			echo "\t$letter. {$answer}\n";
		} else {
			echo "\t*$letter. {$answer}\n";
		}
	}
	$question_num++;
}
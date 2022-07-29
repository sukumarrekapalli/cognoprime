<?php 
include 'functions.php';

//Get unique code from URL
$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $link);
$code = end($link_array);
echo $code;

$questions_list = getQuestionsList($code);
print_r(getQuestion(1));

$NOQ=sizeof($questions_list);
echo $NOQ;

/// Get questionS
for($i=0;$i<$NOQ;$i++){
// 	$question_query= "SELECT * FROM questions_table WHERE question_id = ".$questions_list[$i]." ";
// 	$question_result = mysqli_query($dbconnect,$question_query);
	$qarray = getQuestion($questions_list[$i]);
	$question = $qarray['question'];
    $question_type = $qarray['question_type'];
    echo $question."(".$question_type.")";
 }
?>
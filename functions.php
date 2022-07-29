<?php 
include 'config.php';
if($dbconnect){
  echo " connected";
}
else{
  echo " not connected";
}


//fetch question
// $query = "select * from questions_table";
// $result=mysqli_query($dbconnect,$query);
// $table = $result->fetch_array();
// echo print_r($table);


// Get unique code from URL
// $link = $_SERVER['REQUEST_URI'];
// $link_array = explode('/', $link);
// $code = end($link_array);
// echo $code;

function getQuestionsList($code){
  /// Get survey id
  global $dbconnect;
  $survey_query = "select * from survey_codes_table where survey_code='".$code."'";
  $survey_result= mysqli_query($dbconnect,$survey_query);
  $survey = $survey_result->fetch_array();
  $survey_id = $survey['survey_id'];
  //echo $survey_id;
  ///get questionlist
  $questions_list_query = "select * from survey_table where survey_id = '".$survey_id."'";
  $questions_list_result = mysqli_query($dbconnect,$questions_list_query);
  $questions_list_array = $questions_list_result->fetch_array();
  $questions_list = explode(',',$questions_list_array['survey_questions']);
  //print_r($questions_list);
  /// Question count
  //$NOQ =sizeof($questions_list);
  //echo $NOQ;
  return $questions_list;
}

function getQuestion($question_id){
  global $dbconnect;
  $question_query= "SELECT * FROM questions_table WHERE question_id = ".$question_id." ";
  $question_result = mysqli_query($dbconnect,$question_query);
  $question = $question_result->fetch_array();
  return $question;
}



?>
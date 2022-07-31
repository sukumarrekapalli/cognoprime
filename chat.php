<link type="text/css" rel="stylesheet" href="./node_modules/conversational-form/dist/conversational-form.min.css" />
<link type="text/css" rel="stylesheet" href="./chat_style.css" />
<script type="text/javascript" id="conversational-form-development" src="./node_modules/conversational-form/dist/conversational-form.min.js" crossorigin></script>

<?php
include 'config.php';
include 'functions.php';
?>

<form id="form" action="./collect_response.php">

<?php
if(isset($_POST['code'])){
  $code = $_POST['code'];
}
$questions_list = getQuestionsList($code);
print_r(getQuestion(1));

$NOQ=sizeof($questions_list);
echo $NOQ;

/// Get questionS
for($i=0;$i<$NOQ;$i++){

	$qarray = getQuestion($questions_list[$i]);
	$question = $qarray['question'];
  $question_type = $qarray['question_type'];
   // echo $question."(".$question_type.")";
 
  if($question_type =="openspace"){
    ?>
    <fieldset>
      <label for="name">What's your name?</label>
      <input required cf-questions="<?php echo $question; ?>" type="text" class="form-control" name="name" id="name" />
    </fieldset>
  <?php 
  }
  elseif($question_type == "MCQ"){
  ?>
    <fieldset>
    <select cf-questions="<?php echo $question; ?>" name="opinion" id="opinion" class="form-control">
      <?php
      if ($qarray['options'] != NULL )
      {
        $options_array = explode( ",",$qarray ['options']);
        foreach($options_array as $option)
        echo "<option>".$option."</option>";
      }
      ?>
    </select>
    </fieldset>
  <?php
  }
}
?>
<button type="submit" class="btn btn-default">Submit</button>
</form>
<div id="cf-context" class="dark-theme" role="cf-context" cf-context></div>

<script type="text/javascript"  src="./chat_script.js"></script>

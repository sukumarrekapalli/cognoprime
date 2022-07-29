<link type="text/css" rel="stylesheet" href="./node_modules/conversational-form/dist/conversational-form.min.css" />
<link type="text/css" rel="stylesheet" href="./chat_style.css" />
<script type="text/javascript" id="conversational-form-development" src="./node_modules/conversational-form/dist/conversational-form.min.js" crossorigin></script>

<?php
include 'config.php';

$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $link);
$code = end($link_array);
echo $code;

$query = "select * from questions_table";
$result=mysqli_query($dbconnect,$query);
$table = $result->fetch_array();
//echo print_r($table);
?>

<form id="form">

<?php
if($table[1]=="openspace")
{
  ?>
  <fieldset>
    <label for="name">What's your name?</label>
    <input required cf-questions="<?php echo $table[2]; ?>" type="text" class="form-control" name="name" id="name" />
  </fieldset>
<?php 
} 
?>
  <fieldset>
    <label for="occupation">Occupation</label>
    <div class="radio">
      <label>
        <input cf-questions="Great to meet you, {previous-answer}! I'm a web form, what do you do?|Awesome, {previous-answer}! And what do you do?" type="radio" name="occupation" id="occupation-1" value="developer">
        Developer
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="occupation" id="occupation-2" value="designer">
        Designer
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="occupation" id="occupation-3" value="curious-mind">
        Curious mind
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="occupation" id="occupation-2" value="lost">
        Lost cause
      </label>
    </div>
  </fieldset>

  <fieldset>
    <label for="company">Company</label>
    <input cf-questions="Which company are you with?" type="text" class="form-control" name="company" id="company">
  </fieldset>

  <fieldset>
    <label for="opinion">Will conversational interfaces be everywhere?</label>
    <select cf-questions="Do you think conversational forms will replace web forms in the future?" name="opinion" id="opinion" class="form-control">
      <option></option>
      <option>Definitely</option>
      <option>Maybe</option>
      <option>No</option>
    </select>
  </fieldset>

  <fieldset>
    <label for="email">Email</label>
    <input pattern=".+\@.+\..+" cf-error="E-mail not correct" cf-questions="If you want to stay updated on conversational interfaces from SPACE10, please give me your email." type="email" class="form-control" name="email" id="your-email">
  </fieldset>

  <fieldset style="display: none;">
    <label for="thats-all">Are you ready to submit the form?</label>
    <select cf-questions="Are you ready to submit the form?" name="submit-form" id="submit-form" class="form-control">
      <option></option>
      <option>Yup</option>
    </select>
  </fieldset>

  <fieldset style="display: none;">
    <label for="thats-all">Want to start over?</label>
    <select cf-questions="Want to start over?" name="repeat" id="repeat" class="form-control">
      <option></option>
      <option>Yes, let's go again</option>
    </select>
  </fieldset>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
<div id="cf-context" class="dark-theme" role="cf-context" cf-context></div>

<script type="text/javascript"  src="./chat_script.js"></script>
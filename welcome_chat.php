<?php

$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/', $link);
$code = end($link_array);

?>
<form method="post" action="../chat.php">
<input name="code" value="<?php echo $code;?>" style="display:none;">
<button style="background-color: #3279a8; color: white; padding:10px; margin: 10px;" type="submit">
Take Survey</button>
</form>

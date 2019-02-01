<?php
session_start();


if(!$_GET){

	echo '
	<form action="/escaptcha/index.php">
	  <fieldset>
	    <legend>Personal information:</legend>
	    Last name:<br>
	    <input type="text" name="lastname" value="Mouse"><br><br>
	    ';

	    require("escaptcha.php");

	    echo '
	    <br>
	    <input type="text" name="captcha" value="Captcha"><br>
	    <br>
	    <input type="submit" value="Submit">
	  </fieldset>
	</form>
	';

}else{

	print_r($_GET);
	echo '<br>';
	print_r($_SESSION);

}
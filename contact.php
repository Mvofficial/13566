<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="UTF-8">
				<title>login form</title>

</head>
<body style="background-color:green;">

<form name="logfm" method="post" >
		



<fieldset>
<legend>create your account</legend>
<center>
	<lable >Name</lable><br>
	<input type="text" name="pname" id="pname". required><br>
	<lable for="email">Email</lable><br>
	<input type="email" name="gmail" id="gmail" required><br>
	<lable for="phoneno">Mobile Number</lable><br>
	<input type="number" name="pnum" id="pnum" required><br><br>
	<input type="submit"value="submit your data" >
</center>
</fieldset>
</form>

<?php

     include 'loginform.php';

      echo " $ver";
      
      
      
      ?>
</body>
</html>

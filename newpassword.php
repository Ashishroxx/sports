<?php
session_start();
$psw=$_POST['mobile1'];
$_SESSION['mobile1']=$psw;
echo $psw;
?>

<html>

<head> 
<style>
body
{
background:;
}
div{
margin-left:500px;
margin-top:300px;
}

</style>
</head>
<body>
<form action="changepassword.php" method="post">
<div>
new password: 	<input type="text" name="password" placeholder=" new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
<br>
<button type="submit" value="submit" name="submit" class="btn btn-d">enter</button>
</div>
</form>
</body>





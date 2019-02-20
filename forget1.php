
<html>

<head> 
<style>
body
{
background:#008080;
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
mobile no:<input type="number" name="mobile1" value="mobile"  placeholder=" resistered mobile no"pattern="[0-9]*" title="mobile number should contain 10 number" class="form-control"required>
<br><br>
new password: 	<input type="text" name="password" placeholder="new password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"required>
<br><br>
<button type="submit" value="submit" name="submit" class="btn btn-d">enter</button>
</div>
</form>
</body>





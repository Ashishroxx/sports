<html>
<head></head>
<body>

<?php
for($i=1;$i<=5;$i++)
 {  ?>
<form name="hj" action="text.php" method="post">
<input type="text" name="a" name="a">
 <input type="submit">
</form>
<?php
echo  "ajay".$_POST['a'];
}
?>
</body>
</html>

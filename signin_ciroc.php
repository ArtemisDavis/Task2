<html>
<head>
</head>
<?php
$ret=mysqli_connect("localhost","root") or die("Connection Failed In First Step");
mysqli_select_db($ret,"ciroc_main") or die("Connection Failed In Second Step");

$uname=$_POST['uname'];
$pword=$_POST['pword'];

$uname=stripslashes($uname);
$pword=stripslashes($pword);

$uname=mysqli_real_escape_string($ret,$uname);
$pword=sha1(mysqli_real_escape_string($ret,$pword));

$result=mysqli_query($ret,"SELECT * FROM users WHERE uname='$uname' AND pword='$pword';");
if(mysqli_num_rows($result)==1)
{
	$info=mysqli_fetch_array($result);
	$fname=$info[fname];
	$lname=$info[lname];
	$uname=$uname.".png";
	header("location: $uname");
}
else
{
	header("location: CIROCpre.php?remarks=signin");
	mysqli_close($ret);
}

?>

<body>
</body>
</html>
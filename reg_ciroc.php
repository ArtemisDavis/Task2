
<html>
<head></head>
<body>
<?php

session_start();

$con=mysqli_connect("localhost","root") or die("Connection Failed In First Step");
mysqli_select_db($con,"ciroc_main") or die("Connection Failed In Second Step");


$fname=mysqli_real_escape_string($con,$_POST['fname']);
$lname=mysqli_real_escape_string($con,$_POST['lname']);

$dofb=mysqli_real_escape_string($con,$_POST['dofby']).".".mysqli_real_escape_string($con,$_POST['dofbm']).".".mysqli_real_escape_string($con,$_POST['dofbd']);

$sex=mysqli_real_escape_string($con,$_POST['sex']);
$uname=mysqli_real_escape_string($con,$_POST['uname']);
$pword=sha1(mysqli_real_escape_string($con,$_POST['pword']));
$rpword=mysqli_real_escape_string($con,$_POST['rpword']);

$dept=mysqli_real_escape_string($con,$_POST['dpt']);


// Data Formating

$fname=strtolower($fname);
$fname=ucfirst($fname);

$lname=strtolower($lname);
$lname=ucfirst($lname);


$regexppword = "/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/";

$result=mysqli_query($con,"SELECT * FROM users WHERE uname='$uname';");
if(mysqli_num_rows($result))
{
	header("location: CIROCpre.php?remarks=uname");
}

if(!preg_match($regexppword,$pword))
{
	header("location: CIROCpre.php?remarks=pword");
}

if(strcmp($pword,$rpword)!=0)
{
	header("location: CIROCpre.php?remarks=rpword");
}
if($_FILES['pic']['error']>0 ||$_FILES['pic']['size']>2097152 )
{
		header("location: CIROCpre.php?remarks=pic");
}
else
{
	$tmp_name=$_FILES['pic']['tmp_name'];
	if(isset($_FILES['pic']['name']))
	echo "<script>window.alert('set');</script>";
	else
	die('fckd');
	if(move_uploaded_file($tmp_name,"C:/xampp/htdocs/CIROC/".$uname.".png"))
	echo "<script>window.alert('suc');</script>";
}
	
if(!mysqli_query($con,"INSERT INTO users(fname, lname, dofb, sex, uname, pword, dept) VALUES ('$fname','$lname','$dofb','$sex','$uname','$pword','$dept');"))
{
	echo"<p> Please retry again at this <a href='CIROCpre.php'>link</a></p>";
	die('<br>Error: ' . mysqli_error($con));
}
else
{
mysqli_close($con);
header("location: CIROCpre.php?remarks=suc");
}

?>

</body>
</html>

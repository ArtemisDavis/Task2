<html>
<title>CIROC</title>
<style>
.mbox
{
	width:400px;
	height:600px;
	background-color:#FFF;
	border-width:thick;
	border-color:#333;
	box-shadow:10px 10px 10px #666;
	vertical-align:central;
	margin-left:+450px;
	
}
.ibox
{
	position:relative;
	width:400px;
	height:550px;
	background-color:#CCC;
	vertical-align:central;
}
.font
{
	text-align:center;
	font-family:Consolas;
	font-stretch:extra-expanded;
	font-size:48px;
	color:#FFF;
}
.infont
{
	text-align:left;
	font-family:Consolas;
	font-size:18px;
	color:#FFF;
}
.btn
{
	width:65px;
	height:30px;
	margin-top:-30px;
	margin-left:+215px;
	background-color:#FFF;
	color:#CCC;
	font-family:Consolas;
	font-size:14px;
	font-weight:bold;
	float:left;
}
</style>
<script>
function chkstatus()
{
	var a=document.forms['reg']['fname'].value;
	var b=document.forms['reg']['lname'].value;

	var d=document.forms['reg']['dofby'].value;
	var e=document.forms['reg']['dofbm'].value;
	var f=document.forms['reg']['dofbd'].value;
	var g=document.forms['reg']['sex'].value;
	var h=document.forms['reg']['uname'].value;
	var i=document.forms['reg']['pword'].value;
	var j=document.forms['reg']['rpword'].value;

	var l=document.forms['reg']['dpt'].value;
	var m=document.forms['reg']['pic'].value;

	
	
	if((a==null||a=="")||(b==null||b=="")||(d==null||d=="")||(e==null||e=="")||(f==null||f=="")||(g==null||g=="")||(h==null||h=="")||(i==null||i=="")||(j==null||j=="")||(l==null||l=="")||(m==null||m==""))
	{
		window.alert("Please fill every detail");
		return false;
	}
	
}
</script>
<script>
function validation()
{
	var flag=0;
	
	var regexppword = /^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/;
	
	var str4=document.forms['reg']['pword'].value;
	if(!str4.match(regexppword))
	{
		document.getElementById("alert_pword").style.visibility="visible";
		++flag;
	}
	else
	{
		document.getElementById("alert_pword").style.visibility="hidden";
	}
	var str1=document.forms['reg']['pword'].value
	var str2=document.forms['reg']['rpword'].value;
	if(str1.localeCompare(str2)!=0)
	{
		document.getElementById("alert_rpword").style.visibility="visible";
		++flag;
	}
	else
	{
		document.getElementById("alert_rpword").style.visibility="hidden";
	}
	
	
	
	if(flag)
	{
	}
	else
	{
		document.getElementById("submit").disabled=false;
	}
	
}

</script>
	
<head></head>
<body>
	
<div id="alerts" class="ibox" style="margin-left:0px; float:left; background-color:#FFF">
<div class="ibox" id="alert_rpword" style="margin-left:0px; width:160px;background-color:#903; visibility:hidden; height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Please make sure that you retyped password correctly</b></p>
</div>

<div class="ibox" id="alert_pword" style="margin-left:180px; margin-top:-174px;  width:160px;visibility:hidden; background-color:#903; height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Please make sure the password contains atleast a Lower, Upper case and a digit</b></p>
</div>

<div class="ibox" id="alert_uname" style="margin-left:180px; margin-top:+14px;  width:160px;visibility:hidden; background-color:#903;height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Sorry, the entered rollnum is already taken</b></p>
</div>

<div class="ibox" id="alert_pic" style="margin-left:0px; margin-top:-176px; background-color:#903;visibility:hidden; width:160px; height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Sorry please try another image</b></p>
</div>

<div class="ibox" id="alert_signin" style="margin-left:180px; margin-top:0px; background-color:#903;visibility:hidden;  width:160px; height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Sorry, wrong username or password</b></p>
</div>

<div class="ibox" id="alert_suc" style="margin-left:0px; margin-top:-175px; background-color:#9C3;visibility:hidden;  width:160px; height:160px;box-shadow:10px 10px 10px #666;">
<p class="infont" style="font-size: 16px"><b>Registration Succesful !!!</b></p>
</div>



</div>
<?php
if(isset($_GET['remarks']))
{
$remarks=$_GET['remarks'];
if($remarks=="pword")
{
echo"<script>document.getElementById('alert_pword').style.visibility='visible'</script>";
}
if($remarks=="uname")
{
echo"<script>document.getElementById('alert_uname').style.visibility='visible'</script>";
}
if($remarks=="rpword")
{
echo"<script>document.getElementById('alert_rpword').style.visibility='visible'</script>";
}
if($remarks=="pic")
{
echo"<script>document.getElementById('alert_pic').style.visibility='visible'</script>";
}
if($remarks=="signin")
{
echo"<script>document.getElementById('alert_signin').style.visibility='visible'</script>";
}
if($remarks=="suc")
{
echo"<script>document.getElementById('alert_suc').style.visibility='visible'</script>";
}


}
?>

<div id="container" class="mbox">
<div class="ibox">
<h1 class="font">SIGN UP</h1>
<form name="reg" action="reg_ciroc.php" method="post" enctype="multipart/form-data" onSubmit="return chkstatus()">
<p class="infont" style="margin-left:15px;"><b>First Name    :</b><input type="text" id="fname" name="fname" style="margin-left:45px;"/></p>
<p class="infont" style="margin-left:15px;"><b>Last Name        :</b><input type="text" name="lname" style="margin-left:55px;"/></p>

<p class="infont" style="margin-left:15px;"><b>Date Of Birth :</b><select name="dofby">
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2001">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
</select>
<select name="dofbm">
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>
<select name="dofbd">
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>


<p class="infont" style="margin-left:15px;"><b>Gender : </b><input type="radio" name="sex"  value="M" style="margin-left:15px;">Male<input type="radio" value="F" name="sex" style="margin-left:15px;">Female
<p class="infont" style="margin-left:15px;"><b>Rollnumber :</b><input type="text" name="uname" style="margin-left:85px;"/></p>
<p class="infont" style="margin-left:15px;"><b>Password   :</b><input type="password" id="pword" name="pword" style="margin-left:105px;"/></p>
<p class="infont" style="margin-left:15px;"><b>Re-Enter Password :</b><input type="password" id="rpword" name="rpword" style="margin-left:15px;"/></p>

<p class="infont" style="margin-left:15px;"><b>Department :</b>
<select name="dpt" style="margin-left:75px">
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="EEE">EEE</option>
<option value="CIV">CIV</option>
<option value="MME">MME</option>
<option value="CHE">CHE</option>
<option value="PRO">PRO</option>
<option value="MEC">MEC</option>
</select>
<br>


</div>
<input type="button" value="VALIDATE" id="validate" class="btn" onClick="validation()" style="margin-left:+105px; margin-top:10px; width:85px"/>
<input type="submit" value="SUBMIT" id="submit" disabled=true class="btn"/>
</div>
<div class="ibox" style="height:230px;box-shadow:10px 10px 10px #666; margin-top:-632px; margin-left:850px">
<h1 class="font" style="margin-left:15px;"><b>PROFILE PIC</b></h1>
<input type="hidden" name="MAX_FILE_SIZE" value="2097152"/>
<input type="file" name="pic" id="pic" accept="image/*" style="margin-left:15px">
<p class="infont" style="margin-left:15px"><b>Please ensure that the image should not exceed 2MB of size</b></p>
</div>
</form>

<div class="ibox" style="height:230px; width: 365px; box-shadow:10px 10px 10px #666; margin-left:+885px ">
<h1 class="font">SIGN IN</h1>


<form name="in" action="signin_ciroc.php" method="post">
<p class="infont" style="margin-left:15px;"><b>Username :</b><input type="text" id="uname" name="uname"/></p>

<p class="infont" style="margin-left:15px;"><b>Password :</b><input type="password" id="pword" name="pword"/></p>

<input type="submit" value="SUBMIT" id="submit" class="btn" style="margin-top:-150px; margin-left:+205px"/>
</form>
</div>


</body>
<html>
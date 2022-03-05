<?php
include_once "config.php";
if(isset($_POST["user"])){
$user=$_POST["user"];
$pass=$_POST["user_pass"];
$mail=$_POST["mail"];
$gender=$_POST["gender"];
$mobile=$_POST["mob_digits"];

$sql=mysqli_query($conn,"insert into music(`username`,`password`,`email`,`gender`,`phone`) values('$user','$pass','$mail','$gender','$mobile')");
if($sql)
{
	header("location: Home.php");
}
else
{
	echo "registered unsuccessfull";
}}
elseif(isset($_POST["name"]))
{
	$name=$_POST["name"];
	$pass=$_POST["password"];
	$sql=mysqli_query($conn,"select id from music where username='$name' and password='$pass'");
	$count=mysqli_num_rows($sql);
	if($count==1)
	{
		header("location: Home.php");
	}
	else
	{
		echo "login unsuccessfull";
	}
}
?>
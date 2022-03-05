<?php
include_once "config.php";
?>
<html>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
Song Name:<input type="text" name="s_name" /><br />
Song Movie<input type="text" name="s_movie" /><br />
<input type="file" accept=".mp3" name="fileToUpload" /><br />
<input name="submit" type="submit" value="submit" />
</form>
<?php
if(isset($_POST["submit"]))
{
	$name=$_POST["s_name"];
	$movie=$_POST["s_movie"];
	$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	mysqli_query($conn,"insert into songs(`name`,`movie`,`file`) values('$name','$movie','".basename($_FILES["fileToUpload"]["name"])."')");
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>
</body>
</html>
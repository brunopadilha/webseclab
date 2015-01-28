<?php
require('classes/loader.php'); 
$db = new db("localhost", "root", "newpwd", "webseclab");
$query = $db->conexao->query("SELECT * FROM debug ORDER BY id ASC");
while($data = mysqli_fetch_array($query)) {
	echo "localhost".$data['request']."<br /><b>localhost".urldecode($data['request'])."</b><br /><br />";
}
?>
<?php
require('../classes/loader.php');
$auth = new Auth();
$auth->desconectar();
Header("Location: ../index.php");
?>
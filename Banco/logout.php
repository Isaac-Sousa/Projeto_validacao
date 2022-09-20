<?php
require_once 'DbFunctions.php';
$dbFunctions = new DbFunctions();
pg_close($dbFunctions);
?>
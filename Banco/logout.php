<?php
require_once 'DbFunctions.php';
$dbFunctions = new DbFunctions();
pg_close($dbFunctions->__construct());
echo "<script>alert('Desconectado')</script>";
echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) + "/index.php"</script>'
?>
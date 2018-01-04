<?php
define ("HOST","localhost");

# za internet podesavanje
#define ("USER","forenet_bibliote");
#define ("PASSWORD","dunav2016");
#define ("DATABASE","forenet_biblioteka");

# za localhot podesavanje
define ("USER","root");
define ("PASSWORD","");
define ("DATABASE","internetprodaja");



$db=mysql_connect(HOST, USER, PASSWORD);
mysql_select_db(DATABASE, $db);
?>
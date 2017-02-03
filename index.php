<?php
echo "Hello Docker 2017-02-03";
echo "<br>";
echo "<br>";
echo "Host Name: ";
echo gethostname();
echo "<br>";
echo "Host IP: ";
echo $_SERVER["SERVER_ADDR"];
echo "<br>";
echo "Client IP: ";
echo $_SERVER["REMOTE_ADDR"];
?>

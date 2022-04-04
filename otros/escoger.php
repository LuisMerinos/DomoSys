
<?php
if(isset($_GET["tipo"]) && isset($_GET["segundos"]))
{
        echo shell_exec("sudo python /var/www/html/escoger.py " . $_GET["tipo"] . " " . $_GET["segundos"] . " > /dev/null 2>/dev/null &");
}
?>

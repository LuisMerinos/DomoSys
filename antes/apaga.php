

<?php
echo "<h1>hola</h1>";
echo exec('sudo -u www-data python /usr/lib/cgi-bin/apaga.py');
echo shell_exec('sudo python apaga.py');
echo shell_exec('sudo python /var/www/html/apaga.py');
echo shell_exec('ls');
echo exec("ls");
echo system("sudo python apaga.py");


echo exec("/path/to/ffmpeg ...");
?>

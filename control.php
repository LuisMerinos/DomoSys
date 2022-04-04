<?php

$setControl = $_GET["valor"];




$cookie_name = "user";
$cookie_value = 1;

setcookie($cookie_name, $cookie_value, time() + (86400 * 30));












switch ($setControl) {

    //ventilador
  case "1":
    $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 27 0';
     exec($a); 
    break;
  case "2":
    $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 27 1';
    exec($a);
    break;
    //fin de ventilador 
  case "3":
    $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 22 0';
    exec($a); 
    break;
    case "4":
      $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 22 1';
      exec($a);
      break;
// musica control
 case "5":
  $a = 'sudo /usr/bin/python3 /var/www/html/musicapy/aleatorio.py  ' . $_GET["musica"] . '  ';
 
  exec($a); 
  break;

  case "6":
    $a = 'sudo /usr/bin/python3 /var/www/html/musicapy/stop.py';
    exec($a); 
    break;

    case "7":
 
$a = 'sudo /usr/bin/python3 /var/www/html/musicapy/siguiente.py  ' . $_GET["next"] . ' ';


exec($a); 




      
      break;

      case "8":

        $a = 'sudo /usr/bin/python3 /var/www/html/musicapy/siguiente.py  ' . $_GET["next"] . ' ';
        /*$num = $_COOKIE[$cookie_name]-1; 
        $a = 'sudo /usr/bin/python3 /var/www/html/musicapy/siguiente.py  ' .$num.'  ';
        setcookie("user",$num);*/

exec($a); 




      
      break;


      case "9":

        $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 12 1';
        exec($a); 
        break;
case "10":

  $a = 'sudo /usr/bin/python3 /var/www/html/py/apaga-rasp.py';
 

exec($a); 

      
      break;

      case "11":

        $a = 'sudo /usr/bin/python /var/www/html/py/maestro.py 12 0';
        exec($a); 
        break;







  default:
    echo "Your favorite color is neither red, blue, nor green!";
}


?>


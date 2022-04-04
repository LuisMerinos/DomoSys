

<?php
$a=exec('sudo python /var/www/html/enciende.py');
echo $a;




header('Location: index.html');
?>


<script>
function encender() {
   document.getElementById("foco").src ="img/foco_encendido.jpg";

}
</script>


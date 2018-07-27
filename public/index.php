Testing filebeat ...

<?php 

$log = fopen('../var/logs/log.txt', 'a');
fwrite($log, time() . PHP_EOL);
fclose($log);

?>
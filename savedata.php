<?php
function subcrawl($data) {
$nl = "\n";
$fp = fopen('~/data.txt', 'a');

fwrite($fp, $data);
fwrite($fp, $nl);
fclose($fp);

}

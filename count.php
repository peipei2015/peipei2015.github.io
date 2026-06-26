<?php
$txt = "count.txt";
if (!file_exists($txt)) {
    file_put_contents($txt, 0);
}
$c = (int)file_get_contents($txt);
$c++;
file_put_contents($txt, $c);
echo $c;
?>

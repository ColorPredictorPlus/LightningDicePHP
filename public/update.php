<?php
$url = "https://api.casinoscores.com/svc-evolution-game-events/api/lightningdice/latest";
$data = file_get_contents($url);
file_put_contents("../data.json", $data);
echo "Updated!";
?>
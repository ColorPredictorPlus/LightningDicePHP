<?php
$data = json_decode(file_get_contents("../data.json"), true);
$total = $data['data']['result']['total'];
$dice = $data['data']['result']['value'];
$time = $data['data']['startedAt'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Lightning Dice Stats</title>
  <style>
    body { font-family: Arial; text-align: center; padding: 50px; }
    .card { border: 1px solid #ddd; padding: 20px; display: inline-block; box-shadow: 2px 2px 10px #ccc; border-radius: 10px; }
    .dice { font-size: 60px; margin: 10px 0; }
  </style>
</head>
<body>
  <h1>🎲 Lightning Dice Stats</h1>
  <div class="card">
    <div class="dice"><?= $dice ?></div>
    <h2>Total: <?= $total ?></h2>
    <small><?= date("d M Y H:i:s", strtotime($time)) ?></small>
  </div>
</body>
</html>
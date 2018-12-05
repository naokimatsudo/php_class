<html>
<head><title>menseki.php</title></head>
<body>
<?php
function menseki ($hankei) {
$menseki = $hankei * $hankei * 3.14;
return $menseki;
}
print (menseki(4));
?>
</body>
</html>

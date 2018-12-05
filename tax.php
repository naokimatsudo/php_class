<html>
<head><title>tax.php</title></head>
<body>
<?php
function tax($zeikomi) {
    $zeinuki = $zeikomi / 1.08;
    return $zeinuki;
}
print (tax(105));
?>
</body>
</html>

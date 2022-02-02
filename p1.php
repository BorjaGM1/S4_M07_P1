<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$euros = 10;
const eurodolar = 1.13;
$eurusd = $euros*eurodolar;
const euroyen = 129.41;
$euryen = $euros*euroyen;
echo "$euros euros equivalen a $eurusd dolares y $euryen yenes";
?>
</body>
</html>
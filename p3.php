<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function roots($a, $b, $c) {
    $D = $b*$b - 4*$a*$c;
    if ($D >= 0){
        $x1 = (-$b + sqrt($D))/(2*$a);
        $x2 = (-$b - sqrt($D))/(2*$a);
        echo "Las raíces son: $x1, $x2 \n";
    } else {
        $x1 = -$b/(2*$a);
        $x2 = sqrt(-$D)/(2*$a);
        echo "Las raíces son: $x1 ± $x2 i \n";
    }
}

echo "Ecuación: x*x+5x+4=0\n";
echo "<br>";
roots(1,5,4);
echo "<br>";
echo "\nEcuación is x*x+4x+5=0\n";
echo "<br>";
roots(1,4,5);
?>
</body>
</html>
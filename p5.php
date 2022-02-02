<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
echo "<table border =\"1\" style='border-collapse: collapse'>";
for ($row=1; $row <= 20; $row++) {
    echo "<tr> \n";
    for ($col=1; $col <= 20; $col++) {
        $p = $col * $row;
        if($p%3==1){
            echo "<td style='background-color:red'>$p</td>";
        }
        else if ($p%3==2){
            echo "<td style='background-color:green'>$p</td>";
        }
        else {
            echo "<td style='background-color:yellow'>$p</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
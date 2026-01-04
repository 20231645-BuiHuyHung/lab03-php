<?php
$n = isset($_GET["n"]) ? (int)$_GET["n"] : 0;
echo "<h3>Bảng cửu chương 1–9</h3>";
echo "<table border='1' cellpadding='5'>";
for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 9; $j++) {
        echo "<td>$i × $j = " . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<h3>Tổng chữ số của $n</h3>";
$temp = abs($n);
$sum = 0;
while ($temp > 0) {
    $sum += $temp % 10;
    $temp = intdiv($temp, 10);
}
echo "Tổng = $sum";
echo "<h3>Số lẻ từ 1 đến $n (dừng khi >15)</h3>";
for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) continue;
    if ($i > 15) break;
    echo "$i ";
}
?>

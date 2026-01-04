<?php
require_once "functions.php";

$action = $_GET["action"] ?? "home";

echo "<h2>LAB03 - Mini Utility</h2>";
echo "
<p>
<a href='?action=max&a=10&b=22'>Max</a> |
<a href='?action=min&a=10&b=22'>Min</a> |
<a href='?action=prime&n=17'>Prime</a> |
<a href='?action=fact&n=6'>Factorial</a> |
<a href='?action=gcd&a=12&b=18'>GCD</a>
</p>
";

switch ($action) {
    case "max":
        echo "Max = " . max2($_GET["a"] ?? 0, $_GET["b"] ?? 0);
        break;
    case "min":
        echo "Min = " . min2($_GET["a"] ?? 0, $_GET["b"] ?? 0);
        break;
    case "prime":
        $n = (int)($_GET["n"] ?? 0);
        echo $n . (isPrime($n) ? " là số nguyên tố" : " không là số nguyên tố");
        break;
    case "fact":
        $n = (int)($_GET["n"] ?? 0);
        $f = factorial($n);
        echo $f === null ? "Không tính được giai thừa" : "Giai thừa = $f";
        break;
    case "gcd":
        echo "GCD = " . gcd($_GET["a"] ?? 0, $_GET["b"] ?? 0);
        break;
    default:
        echo "Chọn chức năng từ menu trên";
}
?>

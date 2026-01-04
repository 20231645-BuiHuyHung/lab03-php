<?php
function max2($a, $b) {
    return ($a > $b) ? $a : $b;
}

function min2($a, $b) {
    return ($a < $b) ? $a : $b;
}
function isPrime(int $n): bool {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
function factorial(int $n) {
    if ($n < 0) return null;
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}
function gcd(int $a, int $b): int {
    $a = abs($a);
    $b = abs($b);
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
?>

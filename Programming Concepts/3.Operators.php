<?php 

echo "37 + 13 = " . addition(37,13) ."\n";
echo "13 - 37 = " . substraction(1,1) ."\n";
echo "7 * 4 = " . multiplication(7,4) ."\n";
echo "24 / 7 = " . division(24,7) ."\n\n";
echo "My username as number : " . _1e(37) . "\n";

function addition($a, $b){
    return $a + $b;
}

function substraction($a, $b){
    return $a - $b;
}

function multiplication($a, $b){
    return $a * $b;
}

function division($a, $b){
    return $a / $b;
}
function power($base, $exponent){
    // Check input
    if (!is_int($exponent) || $exponent < 0) {
        throw new Exception("Exponent must be a non-negative integer");
    }

    // non null value
    $result = 1;
    // for each iteration {i} aslong {exponent} is //higger then {i}.
    for ($i = 0; $i < $exponent; $i++) {
        $result = multiplication($result, $base);
    }
    return $result;
}

// Calculate my username
function _1e($power){
$_1e = multiplication(1,10);
return  power($_1e,$power );

//1 * 10 ^20
}
?>

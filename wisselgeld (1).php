<?php

try {
    if (isset($argv[1])) {
        $waarde = $argv[1];
    } else {
        throw new Exception("Geen bedrag meegegeven");
    }

    if ($waarde < 0) {
        throw new Exception("Negatief bedrag meegegeven");
    }
    if ($waarde < 0) {
        throw new Exception("Geen geldig bedrag meegegeven");
    }
} catch (Exception $exception) {
    echo $exception->getMessage();
    exit();
}
define("CONSTANT", [50, 20, 10, 5, 2, 1, 0.5, 0.2, 0.1, 0.05, 0.02, 0.01]);
function weergave_waarde($keer1, $value1)
{
    if ($keer1 > 0) {
        if ($value1 < 1) {
            $cent = $value1 * 100;
            echo $keer1 . " x " . $cent . " cent" . PHP_EOL;
        } else {
            echo $keer1 . " x " . $value1 . " euro" . PHP_EOL;
        }
    }
}
foreach (CONSTANT as $value) {
    $waarde = round($waarde, 2);
    $keer = floor($waarde / $value);
    $waarde = $waarde - $keer * $value;
    weergave_waarde($keer, $value);
}
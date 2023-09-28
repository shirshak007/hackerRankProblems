<?php

/**
 * Complete the 'countingValleys' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER steps
 *  2. STRING path
 */
function countingValleys($steps, $path) {
    // Write your code here
        $seaLevel = 0;
        $current = 0;
        $valley = 0;
    for($i = 0 ; $i < $steps ; $i++) {
        if($path[$i] == 'U') {
            $current++;
        } else {
            if($current >= $seaLevel && $current - 1 < $seaLevel ) {
                $valley++;
            }
            $current--;
        }
    }

    return $valley;
}

echo "Steps: ";
$n = intval(fgets(STDIN));

echo "Path: ";
$p = fgets(STDIN);

$valleys = countingValleys($n, $p);

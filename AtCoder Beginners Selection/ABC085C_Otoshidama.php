<?php
fscanf(STDIN, "%i %i", $N, $Y);

$ans = [];
for ($i = 0; $i <= $N; $i++) {
    for ($j = 0; $j <= $N; $j++) {
        $k = $N - $i - $j;
        if (((10000 * $i + 5000 * $j + 1000 * $k) == $Y)
            && ($k >= 0)
        ) {
            $ans = [$i, $j, $k];
            break;
        }
    }
}
if ($ans) {
    echo implode(" ", $ans);
} else {
    echo implode(" ", [-1, -1, -1]);
}
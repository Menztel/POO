<?php

function chance($percentage): bool
{
    return rand() % 100 < $percentage;
}

function percentToMultiplier($percentage): float
{
    return $percentage / 100 + 1;
}

function progressBar($done, $total) 
{
    $perc = floor(($done / $total) * 100);
    $left = 100 - $perc;
    $write = sprintf("\033[0G\033[2K[%'={$perc}s>%-{$left}s] - $perc%% - $done/$total", "", "");
    fwrite(STDERR, $write);
}

<?php

$times = 1000000;

function echoLoop($times) { 
    $sum = 0;
    do {
        $times--;
        $sum++;
        if ($times <= 0) {
            break;
        }
    } while(true);
    echo $sum . "\n";
}

$beg = microtime(true);

\LyTest\Foo::echoLoop($times);

$end = microtime(true);
$during = ($end - $beg) * 1000;
echo "ext duration: $during (ms)\n";

$beg = microtime(true);

echoLoop($times);

$end = microtime(true);
$during = ($end - $beg) * 1000;
echo "ori php duration: $during (ms)\n";

<?php
$a++;
++$a;

+$a;
-$a;

$a + 1;
$a += 1;
$a - 1;
$a -= 1;
$a * 1;
$a *= 1;
$a / 1;
$a /= 1;
$a % 1;
$a %= 1;
$a ** 1;

$a & $b;
$a &= $b;
$a | $b;
$a |= $b;
$a ^ $b;
$a ^= $b;
~ $a;
$a << $b;
$a <<= $b;
$a >> $b;
$a >>= $b;

$a == $b;
$a === $b;
$a != $b;
$a <> $b;
$a !== $b;
$a < $b;
$a > $b;
$a <= $b;
$a >= $b;
$a <=> $b;

$a and $b;
$a or $b;
$a xor $b;
!$a;
$a && $b;
$a || $b;

$a . $b;
$a .= $b;

$a instanceof stdClass;

$output = `ls -al`;
$a = (bool) "test";

$b = &$a;

$a ?? $b;
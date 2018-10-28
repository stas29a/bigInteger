<?php
require __DIR__."/BigInteger.php";

$l = new BigInteger();

if($l->add("9223372036854775907","92233720368547753207") !== '101457092405402529114')
    die("error\n");
else
    die("ok\n");
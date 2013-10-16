<?php

// composer autoloader
require 'vendor/autoload.php';

// just use the QueryStringer class as it usually works. No need to require the
// file because composer autoloader gets to it.
$qs = new MikeFunk\QueryStringer\QueryStringer;
echo $qs->with(['mykey' => 'myvalue'])->get();

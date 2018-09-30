<?php

require 'vendor/autoload.php';

use Billplz\API;
use Billplz\Connect;

$connect = (new Connect('<api-key-here>'))->detectMode();
//$connect->setMode(true); // true: staging | false: production (default)

$bill_id = 'cjywga';

$billplz = new API($connect);
$response = $billplz->getTransactionIndex($bill_id, array('page'=>'1'));

echo '<pre>'.print_r($response, true).'</pre>';

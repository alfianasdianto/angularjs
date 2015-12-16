<?php
$data = array(
    array('satu', 'tiga', 'satu', 'lima'),
    array('nana', 'nina', 'nunung', 'nunung'),
    array('batu', 'malang', 'malang', 'surabaya'),
);

foreach($data as $k => $v){
    $data[$k] = array_unique($v);
}

var_dump($data[$k]);
exit();
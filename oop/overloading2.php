<?php

class Pelanggan {

  public function __call($name, $arguments) {
    if ($name=='pesan') {
      switch (sizeof($arguments)) {
        case 1:
          if ($arguments[0] instanceof Item) {
            // kode program untuk pesan(Item item)
            print "pesan({$arguments[0]})<br>";
          } else if (is_array($arguments[0])) {
            // kode program untuk pesan(List items)
            print "pesan({$arguments[0]})<br>";
          }
          break;
        case 3:
          // kode program untuk pesan(Item item, Integer jumlah, BigDecimal harga)
          print "pesan({$arguments[0]},{$arguments[1]},{$arguments[2]})<br>";
          break;
      }
    }
  }

}

$pelanggan = new Pelanggan();
$pelanggan->pesan("ITEM1");
$pelanggan->pesan(["ITEM1", "ITEM2", "ITEM3"]);
$pelanggan->pesan("ITEM1", 10, 20000);

?>
<?php
class laptop {
	public $merk;
	public $pemilik;
	public static $harga_beli;
	public static function beli_laptop(){
		return "Beli laptop seharga Rp".self::$harga_beli;
	}

}
laptop::$harga_beli=100000;

echo laptop::beli_laptop();
?>
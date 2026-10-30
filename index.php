<?php

require('./PropertyConstant.php');

use Pbo\Marketplace\Produk;

//object
$produk = new Produk('P0001','Laptop',10000000,5);

//hitung harga 
//$pajak = produk::PAJAK * 100;
//$jumlahPajak = $produk->harga*produk::PAJAK;

//total
//$total = $produk->harga * $jumlahPajak;

//hasil
echo "Produk: ".$produk->nama;
echo "<br/>";

echo "Harga: ".$produk->harga;
echo "<br/>";

echo "Stok: ".$produk->stok;
echo "<br/>";

echo "Pajak: ".$produk->pajak()."%";
echo "<br/>";

echo " Total harga setelah pajak: Rp. ".$produk->total();
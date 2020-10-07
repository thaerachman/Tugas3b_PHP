<?php
echo "Tugas 3b php <br>";
echo "------------------ <br>";
$nsaldo_awal=150000;
$nbunga=12.5;

// Rumus:
$njmlbunga=($nsaldo_awal*($nbunga/100));
$nsaldo_akhir=$nsaldo_awal + $njmlbunga;

echo "Tabungan Awal : Rp. ".$nsaldo_awal;
echo "<br>";
echo "Bunga Setahun : ".$nbunga. "%";
echo "<br>";
echo "Saldo  Akhir : Rp. ".$nsaldo_akhir;
?>
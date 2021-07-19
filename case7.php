<?php

class CaseSeven
{
    public function kembalian(int $total_uang)
    {
        error_reporting(0);
        $pecahan = [100000, 75000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100, 50, 25, 10, 1];

        if ($total_uang < $total_belanja) {
            echo "Uang Kurang\n";
        } elseif ($total_belanja == $total_uang) {
            echo "Tidak Ada Kembalian\n";
        } else {
            $jumlah_kembalian = $total_uang - $total_belanja;
            echo "Jumlah Kembalian = Rp. " . number_format($jumlah_kembalian) . "\n";
            $jumlah_pecahan = count($pecahan);
            for ($i = 0; $i <= $jumlah_pecahan; $i++) {
                $genap = floor($jumlah_kembalian / $pecahan[$i]);
                $sisa = $jumlah_kembalian % $pecahan[$i];
                if ($genap > 0) {
                    $jenis = ($pecahan[$i] > 1000) ? "Lembar" : "Keping";
                    echo $genap . " " . $jenis . " " . "Uang Pecahan" . " Rp. " . number_format($pecahan[$i]) . "\n";
                }
                $jumlah_kembalian = $sisa;
            }
        }
    }
}

$CaseSeven = new CaseSeven();

echo $CaseSeven->kembalian(72500);
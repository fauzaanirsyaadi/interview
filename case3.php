<?php

class Case3
{
    public function check(array $value)
    {
        $output = '';
        foreach ($value as $v) {
            for ($i = strlen($v) - 1; $i >= 0; $i--) {
                $output .= $v[$i];
            }

            if ($output == $v) {
                echo "Benar\n";
            } else {
                echo "Salah\n";
            }
        }
    }

}

$CaseThree = new Case3();
echo $CaseThree->check(["kook", "kaca"]);

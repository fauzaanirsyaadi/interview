<?php

class CaseFive
{
    public function sort(array $data)
    {
        for ($i = 0; $i < count($data); $i++) {
            for ($j = $i + 1; $j < count($data); $j++) {
                if ($data[$i] > $data[$j]) {
                    $temp = $data[$i];
                    $data[$i] = $data[$j];
                    $data[$j] = $temp;
                }
            }
        }

        return array_unique($data);
    }
}

$CaseFive = new CaseFive();
foreach ($CaseFive->sort([4, 5, 8, 9, 0, 2, 8, 2, 11, 15, 2, 9, 0]) as $val) {
    echo $val;
}
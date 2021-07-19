<?php

class Case1
{
    public function vokal_replace(string $data)
    {
        $value = str_replace(['a', 'i', 'u', 'e', 'o'], 'i', $data);
        return $value;
    }
}

$CaseOne = new Case1();
echo $CaseOne->vokal_replace("jika input yang dimasukkan");
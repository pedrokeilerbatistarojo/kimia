<?php

namespace App\Models;

class TaskCombinations
{
    public function generateUniqueCombinations(array $arr){
        $a = array();
        $pos = 0;
        $result = array();

        for($i = 0; $i < count($arr); $i++){
            for($j = 0; $j < count($arr[$i]); $j++){
                if ($arr[$i][$j] == '='){
                    $pos = $j;
                }

                if ($pos > $j){
                    $a[] = $j;
                }
            }
        }

        return $result;
    }
}
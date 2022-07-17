<?php

namespace App\Models;

class WordFinder
{

    private array $arr;
    private string $word;

    public function __construct(array  $arr, $word)
    {
        $this->arr  = $arr;
        $this->word = $word;
    }

    public function longestWord(): string
    {
        $constWord = array();
        $wordSplit = str_split($this->word);
        $wordConstructed = array();
        $result = '';

        foreach ($this->arr as $item) {
            for($i = 0; $i < strlen($item); $i++){
                foreach ($wordSplit as $split) {
                    if ($item[$i] == $split)
                        $constWord[$item][] = $item[$i];
                }
            }

            $pivotWord = implode($constWord[$item]);
            if($item == $pivotWord){
                $wordConstructed[] = $item;
            }
        }

        if (count($wordConstructed) > 0){
            $result = $wordConstructed[0];

            foreach ($wordConstructed as $item) {
                if (strlen($result) < strlen($item)){
                    $result = $item;
                }
            }
        }

        return $result;
    }
}
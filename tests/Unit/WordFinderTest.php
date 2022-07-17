<?php

namespace Tests\Unit;

use App\Models\WordFinder;
use Tests\BaseTest;

class WordFinderTest extends BaseTest
{
    public function testWordFinder(){


        $arr = ['mercury', 'venus', 'earth', 'mars', 'jupiter', 'saturn', 'uranus', 'neptune'];
        $str = 'ajsxuytcnhre';

        $finder = new WordFinder($arr);

        $this->assertEquals('saturn', $finder->longestWord($str));
    }
}
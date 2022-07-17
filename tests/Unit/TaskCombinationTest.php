<?php

namespace Test\Unit;

use App\Models\TaskCombinations;
use Tests\BaseTest;

class TaskCombinationTest extends BaseTest
{
    public function testCombination(){


        $arr = [
            "a=a1,a2",
            "b=b1,b2,b3",
            "c=c1,c2",
        ];

        $expected = [
            "a=a1&b=b1&c=c1",
            "a=a1&b=b1&c=c2",
            "a=a1&b=b2&c=c1",
            "a=a1&b=b2&c=c2",
            "a=a1&b=b3&c=c1",
            "a=a1&b=b3&c=c2",
            "a=a2&b=b1&c=c1",
            "a=a2&b=b1&c=c2",
            "a=a2&b=b2&c=c1",
            "a=a2&b=b2&c=c2",
            "a=a2&b=b3&c=c1",
            "a=a2&b=b3&c=c2"
        ];

        $task = new TaskCombinations();

        $this->assertEquals($expected, $task->generateUniqueCombinations($arr));
    }
}
<?php

require_once __DIR__ . '/getSameCount.php';

use PHPUnit\Framework\TestCase;

class GetSameCountTest extends TestCase
{

    public static function addDataProvider(): array
    {
        return [
            [[], [], 0],
            [[1, 10, 3], [10, 100, 35, 1], 2],
            [[1, 3, 2, 2], [3, 1, 1, 2], 3],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testGetSameCountFunc($data1, $data2, $expected) : void
    {
        $result = getSameCount($data1, $data2);
        $this->assertSame($expected, $result);
    }
}

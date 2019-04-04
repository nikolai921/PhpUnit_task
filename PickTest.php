<?php

require_once __DIR__ . '/pick.php';

use PHPUnit\Framework\TestCase;

class PickTest extends TestCase
{
    public static function addDataProvider(): array
    {
        return [
            [
                ['user' => 'ubuntu', 'cores' => 4, 'os' => 'linux'],
                ['user'],
                ['user' => 'ubuntu'],
            ],
            [
                ['user' => 'ubuntu', 'cores' => 4, 'os' => 'linux'],
                ['user', 'os'],
                ['user' => 'ubuntu', 'os' => 'linux'],
            ],
            [
                ['user' => 'ubuntu', 'cores' => 4, 'os' => 'linux'],
                [],
                [],
            ],
            [
                ['user' => 'ubuntu', 'cores' => 4, 'os' => 'linux'],
                ['none'],
                [],
            ],
        ];
    }

    /**
     * @dataProvider addDataProvider
     */
    public function testPick(array $data, array $dataKey, array $expected): void
    {
        $result = pick($data, $dataKey);
        $this->assertSame($expected, $result);
    }
}

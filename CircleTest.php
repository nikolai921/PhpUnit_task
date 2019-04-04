<?php

require_once __DIR__ . '/Circle.php';

use PHPUnit\Framework\TestCase;

class CircleTest extends TestCase
{

    public function testException(): void
    {
        $this->expectException(InvalidArgumentException::class);
        new Circle(-1);
    }

    public function test__constructValid(): void
    {
        $this->assertIsObject(new Circle(1));
    }

    public static function addDataProviderArea(): array
    {
        return [
            [3, 28.26],
            [4, 50.24],
            [5, 78.5],
            [7, 153.86],
        ];
    }

    public static function addDataProviderCircumference(): array
    {
        return [
            [3, 18.84],
            [4, 25.12],
            [5, 31.4],
            [7, 43.96],
        ];
    }

    /**
     * @dataProvider addDataProviderArea
     */
    public function testCalculateArea($radius, $expected): void
    {
        $newOdj = new Circle($radius);
        $result = $newOdj->getArea();
        $this->assertSame($expected, $result);
    }

    /**
     * @dataProvider addDataProviderCircumference
     */
    public function testCalculateCircumference($radius, $expected): void
    {
        $newOdj = new Circle($radius);
        $result = $newOdj->getCircumference();
        $this->assertSame($expected, $result);
    }
}

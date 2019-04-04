<?php

require_once __DIR__ . '/Random.php';


use PHPUnit\Framework\TestCase;

class RandomTest extends TestCase
{
    private $objRandom;

    protected function setUp(): void
    {
        $this->objRandom = new Random(7);
    }

    protected function tearDown(): void
    {
        $this->objRandom = null;
    }

    public function test__construct(): void
    {
        $this->assertIsObject($this->objRandom);
    }

    public function testReset(): void
    {
        $result1 = $this->objRandom->getNext();
        $result2 = $this->objRandom->getNext();

        $this->assertNotSame($result1, $result2);

        $this->objRandom->reset();

        $result21 = $this->objRandom->getNext();
        $result22 = $this->objRandom->getNext();

        $this->assertSame($result1, $result21);
        $this->assertSame($result2, $result22);

    }


    public function testGetNext(): void
    {
        $result = [];
        for ($i = 1; $i < 9; $i++) {
            $result[] = $this->objRandom->getNext();
        }
        $this->assertSame([6, 9, 0, 7, 6, 9, 0, 7], $result);
    }

}

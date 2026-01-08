<?php

require_once __DIR__ . '/../src/Calculator.php';

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(-1, 1));
        $this->assertEquals(-5, $this->calculator->add(-2, -3));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-2, $this->calculator->subtract(-1, 1));
        $this->assertEquals(5, $this->calculator->subtract(10, 5));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(0, $this->calculator->multiply(0, 5));
        $this->assertEquals(-6, $this->calculator->multiply(-2, 3));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2, $this->calculator->divide(6, 3));
        $this->assertEquals(2.5, $this->calculator->divide(5, 2));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('0으로 나눌 수 없습니다.');
        $this->calculator->divide(10, 0);
    }
}

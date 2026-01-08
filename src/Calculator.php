<?php

/**
 * 간단한 계산기 클래스
 */
class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b): float
    {
        if ($b === 0) {
            throw new InvalidArgumentException('0으로 나눌 수 없습니다.');
        }
        return $a / $b;
    }
}

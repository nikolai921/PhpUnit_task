<?php
declare(strict_types=1);

/**
 * Класс Random
 *
 * На  вход принимаеются данные строгой типизации целочисленного значения.
 * Методом __construct, производится проверка входных данных,
 * с присвоением полученных значений свойствам.
 *
 * Его единственной обязанностью является вычисление случайного числа, по заданному алгоритму.
 * Методы класса, реализуют вычисление случайного числа, а именно метод getNext(), так же выводы полученных результатов
 * и сброс генератора на начальное значение.
 *
 */
class Random
{
    private $newValue;
    private $resetValue;
    private static $coefficientA = 7;
    private static $coefficientC = 7;
    private static $coefficientM = 10;

    public function __construct(int $seed)
    {
        $this->resetValue = $seed;
        $this->newValue = $seed;
    }

    public function getNext(): int
    {
        $this->newValue = (self::$coefficientA * $this->newValue + self::$coefficientC) % self::$coefficientM;
        return $this->newValue;
    }

    public function reset(): void
    {
        $this->newValue = $this->resetValue;
    }
}

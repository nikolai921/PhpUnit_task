<?php
declare(strict_types=1);

/**
 * Класс Circle
 *
 * В методе __construct() принимает на вход параметр строго, типа float,
 * производится проверка входных данных
 *
 * В методах calculatArea() calculatCircumference(), производится вычисление основных параметров
 * с присвоением полученных значений свойствам.
 *
 * $radius;
 * $figureArea;
 * $circumference;
 *
 * Для хеширования результатов, вычисление площади и периметра круга вынесены в отдельные методы,
 * которые вызываются в случая первого расчета.
 */
class Circle
{
    private const CONSTANT = 3.14;
    private $radius;
    private $figureArea;
    private $circumference;

    public function __construct(float $radius)
    {
        if ($radius > 0) {
            $this->radius = $radius;
        } else {
            throw new InvalidArgumentException('Число отрицательное, не может быть использовано в расчетах');
        }
    }

    public function calculateArea(): void
    {
        $this->figureArea = self::CONSTANT * $this->radius * $this->radius;
    }

    public function calculateCircumference(): void
    {
        $this->circumference = 2 * self::CONSTANT * $this->radius;
    }

    public function getArea()
    {
        if (empty($this->figureArea)) {
            $this->calculateArea();
        }
        return $this->figureArea;
    }

    public function getCircumference()
    {
        if (empty($this->circumference)) {
            $this->calculateCircumference();
        }
        return $this->circumference;
    }
}

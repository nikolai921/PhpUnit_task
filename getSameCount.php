<?php

declare(strict_types=1);

/**
 *
 * Реализуйте функцию getSameCount, которая считает количество общих уникальных элементов для двух массивов.
 *
 * @param array $data1
 * @param array $data2
 *
 * @return int
 */

function getSameCount(array $data1, array $data2): int
{
    $dataFilter1 = array_unique($data1);
    $dataFilter2 = array_unique($data2);
    return count(array_intersect($dataFilter1, $dataFilter2));
}


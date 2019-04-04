<?php

declare(strict_types=1);

/**
 * Реализуйте функцию pick, которая извлекает из переданного массива все элементы
 * по указанным ключам и возвращает новый массив.
 *
 * @param array $data
 * @param array $dataKey
 *
 * @return array
 */


$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
];

function pick(array $data, array $dataKey): array
{
    $result = [];
    if (!empty($data) && !empty($dataKey)) {
        foreach ($dataKey as $elem) {
            if (array_key_exists($elem, $data)) {
                $result[$elem] = $data[$elem];
            }
        }
    }
    return $result;
}



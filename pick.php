<?php

declare(strict_types=1);

/**
 * Реализуйте функцию getIn, которая извлекает из массива
 * (который может быть любой глубины вложенности) значение по указанным ключам.
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



<?php

function generateUsers(array $users, $quanity = 10)
{
    $result = [];

    if (empty($users)) {
        throw new Exception('user array is empty');
    }

    $usersCount = count($users) - 1;

    for ($i = 1; $i <= $quanity; $i++) {
        $result[$i]['id'] = $i;
        $result[$i]['name'] = $users[random_int(1, $usersCount)];
        $result[$i]['age'] = random_int(15, 45);
    }

    return $result;
}

function saveUsersToJson(array $array)
{
    return file_put_contents('users.json', json_encode($array));
}

function getUserStats()
{
    $users = json_decode(file_get_contents('users.json'), true);
    $age = array_column($users, 'age');

    $result['names'] = array_count_values(array_column($users, 'name'));
    $result['average_age'] = array_sum($age) / count($age);

    return $result;
}

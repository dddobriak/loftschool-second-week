<?php

const USER_JSON = 'users.json';

function generateUserList(array $users, $quanity = 10)
{
    $result = [];

    if (empty($users)) {
        throw new Exception('user array is empty');
    }

    for ($i = 0; $i <= $quanity; $i++) {
        $result[] = [
            'id' => $i,
            'name' => array_rand(array_flip($users)),
            'age' => rand(18, 45)
        ];
    }

    return $result;
}

function saveUserListToJsonFile(array $array)
{
    $json = json_encode($array);
    $result = file_put_contents(USER_JSON, $json);

    return $result;
}

function getUserListFromJsonFile()
{
    $json = file_get_contents(USER_JSON);
    $users = json_decode($json, true);

    return $users;
}

function countUserNameValues()
{
    $nameColumn = array_column(getUserListFromJsonFile(), 'name');
    $nameCount = array_count_values($nameColumn);

    return $nameCount;
}

function countAverageUserAge()
{
    $age = array_column(getUserListFromJsonFile(), 'age');
    $averageAge = array_sum($age) / count($age);

    return $averageAge;
}

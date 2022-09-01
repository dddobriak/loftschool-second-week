<?php

require_once 'src/functions.php';

$users = [
    'John Stone',
    'Ponnappa Priya',
    'Mia Wong',
    'Peter Stanbridge',
    'Natalie Lee-Walsh',
    'Ang Li',
    'Nguta Ithya',
    'Tamzyn French',
    'Salome Simoes',
    'Trevor Virtue',
];

saveUserListToJsonFile(generateUserList($users, 50));

var_dump(countUserNameValues());
var_dump(countAverageUserAge());

<?php

require('vendor/autoload.php');
//require_once ('src/Models/User.php');
use NFQ\Controllers\UserController;
//use NFQ\Models\User;

$name='';
$email='';
$gender=0;
$stdin = fopen('php://stdin', 'r');
$bool = false;
while (!$bool) {
    echo "Enter username: ";
    $input = trim(fgets($stdin));
    if ($input && is_string($input)) {
        $name = $input;
        $bool = true;
    } else {
        echo 'Username is incorrect!!!' . PHP_EOL;
    }
}
$bool = false;
while (!$bool) {
    echo "Enter email: ";
    $input = trim(fgets($stdin));
    if ($input && is_string($input)) {
        $email = $input;
        $bool = true;
    } else {
        echo 'Email is incorrect!!!' . PHP_EOL;
    }
}
$bool = false;
while (!$bool) {
    echo "Enter gender (Female: 0, Male: 1): ";
    $input = trim(fgets($stdin));

    if ($input==$gender||$input==$gender+1) {
        $gender = $input;
        $bool = true;
    } else {
        echo 'Gender is incorrect!!!' . PHP_EOL;
    }
}
echo PHP_EOL;
$user = new UserController;
echo $user->CreateUser($name,$email,$gender);
//echo $user->;
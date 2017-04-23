<?php

include_once '../connection.php';
include_once '../autoload.php';

//var_dump(User::loadUserByID($connection, 1));

$result = (User::loadUserByID($connection, 1));


foreach ($result as $row) {
    echo '| ' . $row['username'] . ' | ' . $row['email']  . ' | ';
    echo '<br>';
}
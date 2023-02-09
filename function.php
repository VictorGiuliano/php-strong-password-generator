<?php
function randomPassword($password_length)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789?!><"£';
    $password = '';
    $alphaLength = strlen($alphabet) - 1;

    for ($i = 0; $i < $password_length; $i++) {
        $password .= $alphabet[random_int(0, $alphaLength)];
    }
    return $password;
}

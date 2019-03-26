<?php

define('ALPHABET', "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789#@?!.;");

/**
 * Generate a random password
 * @param $passwordLength
 * @return string
 */
function randomPassword($passwordLength) {
    $pass = array();
    $alphabet = ALPHABET;
    $alphaLength = strlen($alphabet) - 1;

    for ($i = 0; $i < $passwordLength; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }

    return implode($pass);
}
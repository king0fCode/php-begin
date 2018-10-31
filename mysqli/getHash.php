<?php

function getHash($pWord)
{
    $hashFormat = "$2y$10$";
    $salt       = "lazydogjumpoverthegreenfense";
    $hashSalt   = $hashFormat . $salt;

    $pWord = crypt($pWord, $hashSalt);

    return $pWord;
}

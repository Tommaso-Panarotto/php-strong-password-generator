<?php
//Password generator function
function passwordGenerator($length)
{
    //List of characters to use for the password
    $script = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!£$%&?|_-';

    //empty password
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $password .= $script[random_int(0, strlen($script) - 1)];
    };

    return $password;
};

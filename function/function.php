<?php
//Password generator function
function passwordGenerator($length)
{
    //Validation
    if (($length >= 5 && $length <= 30) && $length != "") {

        //List of characters to use for the password
        $script = 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM0123456789!£$%&?|_-';

        //empty password
        $password = '';

        //Pick random script
        for ($i = 0; $i < $length; $i++) {
            $password .= $script[random_int(0, strlen($script) - 1)];
        };

        //retrun the password assembled
        return $password;
    } else {
        return "non hai inserito quantità di caratteri adatta";
    }
};

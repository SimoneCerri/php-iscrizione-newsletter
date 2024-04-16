<?php

/**
 * Generate a different type of alert.
 * @param boolean $input true/false.
 * @return array [class => success/danger, alert => subscribe/error].
 */
function generateAlert($input)
{
    if ($input) {
        return
            [
                "class" => "success",
                "alert" => "You subscribe to our newsletter !"
            ];
    } else {
        return [
            "class" => "danger",
            "alert" => "Error! Insert a correct email please."
        ];
    }
}

/**
 * Check if an email is valid ("@" and ".").
 * @param string $mail An email to check.
 * @return boolean true/false.
 */
function validateEmail($mail)
{
    if (str_contains($mail, "@") && str_contains($mail, ".")) //check if "email" contain both "@" and "."
    {
        //var_dump("ok");
        //$message = "Welcome";
        return true;
        //return "You subscribe to our newsletter !";
        /* return [
            "class" => "success",
            "alert" => "You subscribe to our newsletter !"
        ]; */
    } else {
        //$message = "Nope";
        return false;
        //return "Error! Insert a correct email please.";
        /* return [
            "class" => "danger",
            "alert" => "Error! Insert a correct email please."
        ]; */
    }
}


?>
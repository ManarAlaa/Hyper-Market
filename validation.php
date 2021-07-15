<?php
function validateEmail($email){
    $boolEmail = filter_var($email,FILTER_VALIDATE_EMAIL);
    if($boolEmail){
        return true;
    }
    else{
        return false;
    }
}

function validatePassword($password){
    if(strlen($password) >= 6){
        return true;
    }
    else{
        return false;
    }
}
?>
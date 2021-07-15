<?php
function selectQuery($table,$cols,$cond){
    $mylink = mysqli_connect("localhost","root","");
    mysqli_select_db($mylink,"market");
    $strQuery = "SELECT $cols FROM $table WHERE $cond";
    $queryRes = mysqli_query($mylink,$strQuery);
    if(mysqli_num_rows($queryRes) > 0){
        return $queryRes;
    }
    else{
        return false;
    }
}


function insertQuery($table, $cols, $vals){
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"market");
    $strQuery = "INSERT INTO $table ($cols) VALUES ($vals)";
    $queryRes = mysqli_query($link,$strQuery);
    return $queryRes;
}


function updateQuery($table, $colAndVals, $cond){
    $link = mysqli_connect("localhost","root","");
    mysqli_select_db($link,"market");
    $strQuery = "UPDATE $table SET $colAndVals WHERE $cond";
    $queryRes = mysqli_query($link,$strQuery);
    if(mysqli_affected_rows($link) > 0){
        return true;
    }
    else{
        //return false;
        return mysqli_error($link);
    }
}

function deleteQuery($table, $cond){
    $mylink = mysqli_connect("localhost","root","");
    mysqli_select_db($mylink,"market");
    $strQuery = "DELETE FROM $table WHERE $cond";
    $queryRes = mysqli_query($mylink,$strQuery);
    if(mysqli_affected_rows($mylink) > 0){
        return true;
    }
    else{
        //echo 
        //return mysqli_error($link);
        return false;
    }
}
?>
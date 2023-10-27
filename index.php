<?php
    $serverName = "dbnewserver.database.windows.net";
    $connectionOptions = array(
        "Database" => "app_ai",
        "Uid" => "sqladmin",
        "PWD" => "adminSql@1234" 
    );
    //Establishes the connection

    $conn = sqlsrv_connect($serverName, $connectionOptions);
if(isset($_GET["lg_email"] and $_GET["lg_password"] and $_GET["lg_incoming_msg"] and $_GET["lg_AI_msg"] and $_GET["lg_timestamp"]))
{
    //**********LOGIN PARAMETER*************
    $lg_email = $_GET["lg_email"];
    $lg_password = $_GET["lg_password"];
    $lg_incoming_msg = $_GET["lg_incoming_msg"];
    $lg_AI_msg = $_GET["lg_AI_msg"];
    $lg_timestamp = $_GET["lg_timestamp"];
    
    $login_insert = "INSERT INTO login (lg_email, lg_password, lg_incoming_msg, lg_AI_msg, lg_timestamp)
   VALUES ('$lg_email', '$lg_password', '$lg_incoming_msg', '$lg_AI_msg', '$lg_timestamp')";

    $login_Result= sqlsrv_query($conn, $login_insert);
    sqlsrv_free_stmt($login_Result);
    echo "login insert done";
}

if(isset($_GET["sg_email"] and $_GET["sg_password"] and $_GET["sg_incoming_msg"] and $_GET["sg_AI_msg"] and $_GET["sg_timestamp"]))
{
    //**********SIGNUP PARAMETER*************
    $sg_email = $_GET["sg_email"];
    $sg_password = $_GET["sg_password"];
    $sg_incoming_msg = $_GET["sg_incoming_msg"];
    $sg_AI_msg = $_GET["sg_AI_msg"];
    $sg_timestamp = $_GET["sg_timestamp"];
    
  $signup_insert = "INSERT INTO signup (sg_email, sg_password, sg_incoming_msg, sg_AI_msg, sg_timestamp)
   VALUES ('$sg_email', '$sg_password', '$sg_incoming_msg', '$sg_AI_msg', '$sg_timestamp')";

    $signup_result= sqlsrv_query($conn, $signup_insert);
    sqlsrv_free_stmt($signup_result);
 echo "signup Insert Done";
}
?>

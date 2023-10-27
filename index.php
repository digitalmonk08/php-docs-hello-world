<?php
    $serverName = "dbnewserver.database.windows.net";
    $connectionOptions = array(
        "Database" => "app_ai",
        "Uid" => "sqladmin",
        "PWD" => "adminSql@1234" 
    );
    //Establishes the connection

    $conn = sqlsrv_connect($serverName, $connectionOptions);

//**********LOGIN PARAMETER*************
    $lg_email = $_GET["lg_email"];
    $lg_password = $_GET["lg_password"];
    $lg_incoming_msg = $_GET["lg_incoming_msg"];
    $lg_AI_msg = $_GET["lg_AI_msg"];
    $lg_timestamp = $_GET["lg_timestamp"];

    //**********SIGNUP PARAMETER*************
    $sg_email = $_GET["sg_email"];
    $sg_password = $_GET["sg_password"];
    $sg_incoming_msg = $_GET["sg_incoming_msg"];
    $sg_AI_msg = $_GET["sg_AI_msg"];
    $sg_timestamp = $_GET["sg_timestamp"];

//**********HISTORY PARAMETER*************
    $email = $_GET["email"];
    $incoming_msg = $_GET["incoming_msg"];
    $AI_msg = $_GET["AI_msg"];
    $category= $_GET["category"];
    $mytimestamp = $_GET["mytimestamp"];

    $lg_email_data = "";

    $tsql= "SELECT * FROM login WHERE lg_email='$lg_email'";
    $getResults= sqlsrv_query($conn, $tsql);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
echo ($row['lg_customer_id'] . " " . $row['lg_email'] . " " . $row['lg_password'] . " " . $row['lg_incoming_msg'] .  PHP_EOL);
    $lg_email_data = $row['lg_email'];
    }
       if ($lg_email_data == $lg_email){
           echo "Email Already Exist";
    }
    sqlsrv_free_stmt($getResults);
   

// if (isset($lg_email, $lg_password, $lg_incoming_msg, $lg_AI_msg, $lg_timestamp)) 
// {
//     $login_insert = "INSERT INTO login (lg_email, lg_password, lg_incoming_msg, lg_AI_msg, lg_timestamp)
//    VALUES ('$lg_email', '$lg_password', '$lg_incoming_msg', '$lg_AI_msg', '$lg_timestamp')";

//     $login_Result= sqlsrv_query($conn, $login_insert);
//     sqlsrv_free_stmt($login_Result);
//     echo "Login Successfully";
// }

// if (isset($sg_email, $sg_password, $sg_incoming_msg, $sg_AI_msg, $sg_timestamp)) 
// {
    
//   $signup_insert = "INSERT INTO signup (sg_email, sg_password, sg_incoming_msg, sg_AI_msg, sg_timestamp)
//    VALUES ('$sg_email', '$sg_password', '$sg_incoming_msg', '$sg_AI_msg', '$sg_timestamp')";

//     $signup_result= sqlsrv_query($conn, $signup_insert);
//     sqlsrv_free_stmt($signup_result);
//  echo "Signup Successfully";
// }

// if (isset($email, $incoming_msg, $AI_msg, $category, $mytimestamp)) 
// {
    
//   $history_insert = "INSERT INTO ID_1001 (email, incoming_msg, AI_msg, category, mytimestamp)
//    VALUES ('$email', '$incoming_msg', '$AI_msg', '$category', '$mytimestamp')";

//     $history_result= sqlsrv_query($conn, $history_insert);
//     sqlsrv_free_stmt($history_result);
//  echo "History Inserted";
// }
    
?>

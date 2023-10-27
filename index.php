<?php
    $serverName = "dbnewserver.database.windows.net";
    $connectionOptions = array(
        "Database" => "app_ai",
        "Uid" => "sqladmin",
        "PWD" => "adminSql@1234" 
    );
    //Establishes the connection
    $lg_email = $_GET["lg_email"];
    $lg_password = $_GET["lg_password"];
    $lg_incoming_msg = $_GET["lg_incoming_msg"];
    $lg_AI_msg = $_GET["lg_AI_msg"];
    $lg_timestamp = $_GET["lg_timestamp"];

    $conn = sqlsrv_connect($serverName, $connectionOptions);
//     $tsql= "SELECT * FROM kareena";
//     $getResults= sqlsrv_query($conn, $tsql);
//     echo ($conn);
//     echo ($getResults);
//     echo ("Reading data from table" . PHP_EOL);
//     if ($getResults == FALSE)
//         echo (sqlsrv_errors());
//     while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
// echo ($row['customer_id'] . " " . $row['email'] . " " . $row['incoming_msg'] . " " . $row['AI_msg'] .  PHP_EOL);
//     }

    $tmgl = "INSERT INTO login (lg_email, lg_password, lg_incoming_msg, lg_AI_msg, lg_timestamp)
   VALUES ('$lg_email', '$lg_password', '$lg_incoming_msg', '$lg_AI_msg', '$lg_timestamp')";

echo "Insert Done";
 $getResult= sqlsrv_query($conn, $tmgl);

    sqlsrv_free_stmt($getResults);
    sqlsrv_free_stmt($getResult);
?>

<?php
    $serverName = "dbnewserver.database.windows.net";
    $connectionOptions = array(
        "Database" => "app_ai",
        "Uid" => "sqladmin",
        "PWD" => "adminSql@1234" 
    );
    //Establishes the connection
    $value = $_GET["name"];
    echo "name";
    echo ($value);
    echo "changes hoye hun";
//     $conn = sqlsrv_connect($serverName, $connectionOptions);
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

//     $tmgl = "INSERT INTO kareena (customer_id, email, incoming_msg, AI_msg, category, mytimestamp)
//    VALUES ('54', 'testw@gmail.com', 'hello', 'hii', 'clinical', '26-10-23')";

//  $getResult= sqlsrv_query($conn, $tmgl);

//     sqlsrv_free_stmt($getResults);
//     sqlsrv_free_stmt($getResult);
?>

<pre>
<?php
    
    $db_host = "localhost";
    $db_name = "usuarios";
    $db_user = "root@localhost";
    $db_pass = "Proyecto1PH";
    
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }
    
    echo "Connected successfully.";
 
    $sql = "SELECT *
            FROM user
            ORDER BY date_entry;";
 
    $results = mysqli_query($conn, $sql);
 
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $users = mysqli_fetch_all($results, MYSQLI_ASSOC);
 
        print_r($users);
    }
 
?>
</pre>
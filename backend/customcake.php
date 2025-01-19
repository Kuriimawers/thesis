<?php
 require_once('DB.php');

 $dropSQL = "DROP TABLE IF EXISTS customtbl";
 if (mysqli_query($connect, $dropSQL)) {
     echo '<div class="alert alert-success" role="alert">Table customtbl dropped successfully (if it existed).</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error dropping table: ' . mysqli_error($connect) . '</div>'; 
}

$custom = "CREATE TABLE customtbl (
    fullname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    contact varchar(255) NOT NULL,
    cakeflavors varchar(255) NOT NULL,
    cakesize varchar(255) NOT NULL,
    cakeshapes varchar(255) NOT NULL,
    sugarlevel varchar(255) NOT NULL,
    toppings varchar(255) NOT NULL,
    suggestions varchar(255) NOT NULL,
    layers varchar(255) NOT NULL,
    colors varchar(255) NOT NULL,
    themes varchar(255) NOT NULL,
    addresss varchar(255) NOT NULL,
    date_to_delivered varchar(255) NOT NULL
);";

if ($connect->query($custom) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Table `ordertbl` created successfully.</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error creating table: ' . $connect->error . '</div>';
}
//mysqli_close($connect);
?>
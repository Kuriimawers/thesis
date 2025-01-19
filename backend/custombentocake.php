<?php

require_once('DB.php');

 $dropSQL = "DROP TABLE IF EXISTS bentotbl";
 if (mysqli_query($connect, $dropSQL)) {
     echo '<div class="alert alert-success" role="alert">Table customtbl dropped successfully (if it existed).</div>';
 } else {
     echo '<div class="alert alert-danger" role="alert">Error dropping table: ' . mysqli_error($connect) . '</div>';
 }

$bento = "CREATE TABLE bentotbl (
    fullname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    contact varchar(255) NOT NULL,
    cakeflavors varchar(255) NOT NULL,
    -- cakeshapes varchar(255) NOT NULL,
    -- sugarlevel varchar(255) NOT NULL,
    toppings varchar(255) NOT NULL,
    suggestions varchar(255) NOT NULL,
    w_cupcakes varchar (2555) NOT NULL,
    -- layers varchar(255) NOT NULL,
    colors varchar(255) NOT NULL,
    themes varchar(255) NOT NULL,
    addresss varchar(255) NOT NULL,
    date_to_delivered varchar(255) NOT NULL
);";

if ($connect->query($bento) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Table `cctbl` created successfully.</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error creating table: ' . $connect->error . '</div>';
}
//mysqli_close($connect);
?>
<?php

require_once('DB.php');

 $dropSQL = "DROP TABLE IF EXISTS cupcaketbl";
 if (mysqli_query($connect, $dropSQL)) {
     echo '<div class="alert alert-success" role="alert">Table ordertbl dropped successfully (if it existed).</div>';
 } else {
     echo '<div class="alert alert-danger" role="alert">Error dropping table: ' . mysqli_error($connect) . '</div>';
 }

$cupcake = "CREATE TABLE cupcaketbl (
    fullname varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    contact varchar(255) NOT NULL,
    quantity varchar(255) NOT NULL,
    -- suggestions varchar(255) NOT NULL,
    addresss varchar(255) NOT NULL,
    theme varchar(255) NOT NULL,    
    date_to_delivered varchar(255) NOT NULL
);";

if ($connect->query($cupcake) === TRUE) {
    echo '<div class="alert alert-success" role="alert">Table `cctbl` created successfully.</div>';
} else {
    echo '<div class="alert alert-danger" role="alert">Error creating table: ' . $connect->error . '</div>';
}
//mysqli_close($connect);
?>
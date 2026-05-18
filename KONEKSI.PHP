<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "db_tambora"
);

if(!$conn){
    die("Koneksi gagal");
}

?>
<?php
include "koneksi.php";

$result = mysqli_query($conn, "DELETE FROM `customer` where `id` = '$_GET[id]'");
header("Location:index.php");
?>
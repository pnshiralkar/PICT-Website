<?php
require ('connect.php');

$sql = "SELECT * FROM toppers WHERE 1";

$result_toppers = $conn->query($sql);
$num_toppers = $result_toppers->num_rows;

if($num_toppers<=4)
    $topanimtime = 16;
else
    $topanimtime = $num_toppers*4;
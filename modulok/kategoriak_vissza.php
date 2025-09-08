<?php
include("../connect.php");

$valasz=[];

$vissza=$kapcsolat->query("select * from kategoriak");

while($sor = mysqli_fetch_assoc($vissza)){
    array_push($valasz, $sor);
}
echo json_encode($valasz);

<?php
include("../connect.php");

$valasz=[];
$feltetel;
if($_POST["kategoria"]==0){
    // $vissza=$kapcsolat->query("select * from termekek where kiemelt='1'");
    $feltetel=" where kiemelt='1'";
}
else {
    // $vissza=$kapcsolat->query("select * from termekek where kategoria_id='".$_POST["kategoria"]."'");
    $feltetel=" where kategoria_id='".$_POST["kategoria"]."'";
}

$vissza=$kapcsolat->query("select * from termekek ".$feltetel);

while($sor = mysqli_fetch_assoc($vissza)){
    $sor["kiir_ar"]=number_format($sor["ar"],0,""," ");
    array_push($valasz, $sor);
}
echo json_encode($valasz);
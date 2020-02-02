<?php
    include_once '../fu.php';
    $id=$_GET['id'];
    $sql="SELECT love FROM comments WHERE id='$id'";
$res=myc($sql);
// print_r($res[0]['love']);
$data=$res[0]['love'];
echo $data;
$dataa= $data + 1;
// echo $dataa;
$sql1="UPDATE comments SET love='$dataa' WHERE id='$id'";

myfc($sql1);

?>
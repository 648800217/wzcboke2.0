<?php
    include_once '../fu.php';
    $id=$_GET['id'];
    // echo $id;
    $sql="SELECT * FROM comments where id='$id'";
    $res=myc($sql);
    // echo '<pre>';
    // print_r($res);

    // echo '</pre>';
   $dataa=json_encode($res);
   echo $dataa;





?>
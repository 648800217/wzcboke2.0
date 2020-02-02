<?php
include_once '../fu.php';
         $sql="SELECT *  FROM comments";
         $comments= myc($sql);
     
        //  print_r($comments);
         $data=json_encode($comments);
         echo $data;

?>
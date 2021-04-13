<?php
include ("./calculate.php");
if ($_POST){
    $value1 =$_POST["x"];
    $value2 =$_POST["y"];
    $operation=$_POST["operation"];
    if($operation=='add+'){
       $result =$value1+$value2;
       echo "The result is $result";
    }
    elseif($operation=='sub-'){
        $result=$value1-$value2;
        echo "The result is $result";
    }
    elseif($operation=='mult*'){
        $result=$value1*$value2;
        echo "The result is $result";
    }
    elseif($operation=='div/'){
        $result=$value1/$value2;
        echo "The result is $result";
    }
}
?>
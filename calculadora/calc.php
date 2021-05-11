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
	elseif($operation=='root'){
		$result= pow($value1,1/2);
		$result2= pow($value2,1/2);
		 echo "The result to value 1 is $result\n";
		 echo "The result to value 2 is $result2";
    }
	elseif($operation=='percent%'){
		$result=$value1/100;
		$result2=$value2/100;
		 echo "The result to value 1 is $result\n";
		 echo "The result to value 2 is $result2";
	}
	elseif($operation=='1/x'){
		$result=1/$value1;
		$result2=1/$value2;
		 echo "The result to value 1 is $result\n";
		 echo "The result to value 2 is $result2";
	}
}
?>
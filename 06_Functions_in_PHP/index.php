<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// function even_number($x,$y) 
// { for( $i=$x; $i<=$y; $i++ )
//      { 
//         if( $i%2 == 0 ){
//              echo "<br>", $i; 
//             }
//          } 
//         }
// even_number(5,10);
// even_number(20,30)
// $op='+';
// function add($num1,$num2=20){
// echo ($num1+$num2);
// }
// function sub($num1,$num2){
//     echo ($num1-$num2);
//     }
//     function mul($num1,$num2){
//         echo ($num1*$num2);
//         }
//         function div($num1,$num2){
//             echo ($num1/$num2);
//             }
// switch($op){
//     case '+':
//         add(5);
//         break;
//     case '-':
//         sub(5,10);
//         break;
//     case '*':
//         mul(5,10);
//         break;
//     case '/':
//         div(6,4);
//         break;
//     default:
//    echo "Invalid Operator";

// }

// function add($n1,$n2) : int{
//     return 4.5 ;
// }

// $result=add(5,10);
// echo "The result is ".$result;


// $today=date("d-m-Y");
// echo $today;


// $time=time();
// echo $time;
date_default_timezone_set("Asia/Dili");
$currentTime=date("H:i:s");
echo $currentTime;

?>
</body>
</html>
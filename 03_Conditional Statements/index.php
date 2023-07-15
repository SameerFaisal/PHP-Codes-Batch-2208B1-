<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conditional Statements in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">  
</head>
  <body>
    <h1>Conditional Statements in PHP</h1>
<div class="container">
    <?php
    // $age=20;
    // $city='Karachi';

    // $check=($age>18 xor $city==='Lahore');
    
    // echo $check;
    
    // $age=17;
    // echo "Age in 2021 is $age";
    // echo "<br>";

    // // $newAge=$age+2;

    // $age=$age+2;


    // echo "Age in 2023 is: $age"
    
    // 
    
    // $age=17;
    // //  $age=$age+2;
    // $age+=2;
    //     echo "Age in 2023 is: $age"

    // $age=17;
    // $city='Lahore';

    // if($age>=18 && $city==='Karachi'){
    //     echo 'You are eligible to vote.';
    // }
    // else if($age>=18 && $city!=='Karachi'){
    //     echo 'Sorry, you cannot vote yet! as you are not in karachi';
    // }
    // else if($age<18 && $city==='Karachi'){
    //     echo'Please wait for your parents permission!';
    // }
    // else{
    //     echo 'Sorry!, You have exceeded the age limit and can no longer apply online. Please contact';
    // }

    // $n1=5;
    // $n2=10;
    // $op='.';

    // if($op==='+'){
    //     $result = $n1 +$n2 ;
    //     print("The sum of ".$n1." and ". $n2 . " is :".$result);
    // }
    // else if($op==='-'){
    //     $result = $n1 -$n2 ;
    //     print("The difference between ".$n1." and ". $n2 . " is :" .$result);
    // }
    // else if($op==='*'){
    //     $result = $n1 *$n2 ;
    //     print("The product of ".$n1." and ". $n2 . " is :" .$result);
    // }
    // else if($op==='/'){
    //     $result = $n1 /$n2 ;
    //     print("The quotient of ".$n1." and ". $n2 . " is :" .$result);
    // }
    // else{
    //     print('Invalid operator');
    // }

  $n1=5;
    $n2=10;
    $op='%';

    switch($op){

        case '+':
            $result=$n1+$n2;
            echo "$result";
            break;
        case '-':
            $result=$n1-$n2;
            echo "$result";
            break;
        case '*':
            $result=$n1*$n2;
            echo "$result";
            break;
        case '/':
            $result=$n1/$n2;
            echo "$result";
            break;
        default:
            echo 'Operator is invalid';
    }
    
    ?>
</div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
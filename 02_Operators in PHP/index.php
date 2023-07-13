<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>

    <?php
    echo "2208B1";
    
    ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">  
</head>
  <body>
    
  <div class="container">

<?php
// $n1=10;
// $n2=4;

// $sub1=89;
// $sub2=90;



// $perc=(($sub1+$sub2)/200)*100;

// echo "Your Percentage is: $perc%";


// echo $obMarks


//1. Arithmetic Operators
// echo $n1+$n2
// echo $n1-$n2
// echo $n1*$n2
// echo $n1-$n2
// echo $n1%$n2


// $sal=20000;

// $inc=$sal+($sal*0.25);

// echo $inc;

// $exp=2+9-8/2+3-1;

// echo $exp;

// $exp=2*(9-8)/1+(3-1);


// echo $exp;


//2. Comparison Operators
//(i) ==
//(ii) ===
//(iii) >
//(iv) <
//(v) >=
//(vi) <=
//(vii) !==


// $age=20;
// // $check=($age===20);
// // $check=($age===20);
// $check=($age>20);
// echo $check;
// echo "<br>";
// $check=($age>=20);
// echo $check;
// echo "<br>";
// $check=($age<20);
// echo $check;
// echo "<br>";
// $check=($age<=20);
// echo $check;
// echo "<br>";
// $check=($age!==20);
// echo $check;
// echo "<br>";


$age=23;
$city="Karachi";
$country="Pakistan";

// $check=($age>=18 && $city!=="Karachi");
// echo $check;

// $check=($age>=18 || $city==="Karachi");
// echo $check;

// $check=($age<=18 || $city!=="Karachi");
// echo $check;

$check=($age>=18 || $city==="Karachi" && $country!=="Pakistan");
echo $check;
?>

  </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
$name='Taj ul Islam';
// echo "Hello $name";

// $std1name='Asim';

$age=20;
// $demo=var_dump($name);
// echo var_dump($age);
// echo "<br>";
// echo var_dump($name);

echo gettype($name);

?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>
<?php
echo "Hello $name";
?>

  </strong> 

  <?php
  echo "Your age is $age";
  
  ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>



<div class="container">
    <?php
    $names=array("Hassan","Zain","Asim");

    echo var_dump($names);
echo "<br>";
echo $names[0]; //Hassan   
echo "<br>";
echo $names[1]; //Zain
echo "<br>";
echo $names[2]; //Asim
echo "<br>";

// echo is_array($names[0]);

// echo is_int($age);
// echo is_double($age);


    ?>
</div>

</body>
</html>
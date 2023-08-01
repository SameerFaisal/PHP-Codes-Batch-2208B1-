<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    
<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<label>Course Name: </label>
<input name="cname" type="text">
<br><br>
<label>Faculty Name: </label>
<input name="faculty" type="text">
<br><br>
<input name="save" type="submit" value="Save">
</form>

<?php
if(isset($_POST['save'])){
    $cname = $_POST['cname'];
    $faculty = $_POST['faculty'];

    $query = "INSERT INTO courses (`cname`, `faculty`) VALUES ('$cname', '$faculty')";
    $res = mysqli_query($connection, $query);
    if(!$res){
        die("connection failed");
    }
}

// Select query to fetch data from the 'courses' table
$selectQuery = "SELECT * FROM courses";
$result = mysqli_query($connection, $selectQuery);
if ($result && mysqli_num_rows($result) > 0) {
    echo "<h2>Course Data:</h2>";
    echo "<ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>CourseId: " . $row['cid'] . ", cname: " . $row['cname'] . ", faculty: " . $row['faculty'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No data found.";
}
?>
 </body>
 </html>
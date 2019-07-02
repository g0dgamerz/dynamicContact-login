<?php
 include "config.php";


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="log">
<?php

$sql="select * from contact";
$res = mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "-Message" . $row["message"]."<br>";
    }
} else {
    echo "0 results";
}


?>

<div>
</div>
</div>
</body>
</html>
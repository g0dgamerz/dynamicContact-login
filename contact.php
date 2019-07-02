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
<?php
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['message'];
    $sql="INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$msg')";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    if($res){
        echo "successfuly sent message";
    }else{
        echo "somethng wen wrong";
    }

   
        // header("location:index.php");
        // echo "message sent";



}
else{
    echo "you are not logged in";
}


?>
<div class="log">
    <form action="" method="POST">
        name:  <input type="text" name="name"><br><br>
        email: <input type="email" name="email"><br><br>
        message: <input type="text" name="message"><br><br>

        <button name="sub">submit</button><br>
    </form>
</div>
</body>
</html>
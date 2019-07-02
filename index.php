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
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql="SELECT name,password FROM admin";
    $res = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];


    if($password == $pass){
        header("location:admin.php");
        echo "you are logged in";
    }
    else{
        echo "error";
    }


}
else{
    echo "you are not logged in";
}


?>
<div class="log">
    <form action="" method="POST">
        name:  <input type="text" name="name"><br><br>
        password: <input type="password" name="password"><br><br>
        <button name="login">login</button><br>
    </form>
</div>
</body>
</html>
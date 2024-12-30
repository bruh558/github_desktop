<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="insert into `users` (name,email,password) 
  values('$name','$email','$password')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "data inserted successfuly";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Bootstrap CSS -->
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
 <title> crud</title>
 </head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>name</label>
                <input type="text" class="form-control"
                    placeholder="Enter your name" name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control"
                    placeholder="Enter your email" name="email">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="text" class="form-control"
                    placeholder="Enter your password" name="password">
            </div>


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
</body>

</html>
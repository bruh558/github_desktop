<?php 
include 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container"> 
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add a user</a>
           </button>
           <table class="table">
  <thead>
    <tr>
      <th scope="col">sl no</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
    <th scope="col">operations</th> 
</tr>
  </thead>
  <tbody>

  <?php  
$sql="select * from `users`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>  
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$password.'</td>
      <td>
    <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
  </td>
  </tr>';
    }
}


?>

  </tbody>
</table>
    </div>
</body>
</html>
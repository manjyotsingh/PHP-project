<?php

$login = false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'dbconnect.php';

$admin=$_POST["admin-id"];
$password=$_POST["password"];

$sql="SELECT * from admin where ID='$admin' AND Password='$password'  ";
$result= mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if($num== 1){

$login = true;

session_start();
$_SESSION['loggedin']=true;
$_SESSION['admin-id']=$admin;
header("location:admin-dashboard.php");
exit;
}
else
{
  
  echo 'Wrong credentials';
}

}




?>

<html>
<head><title>Admin-Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>
<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body background="images/bg.jpg">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin-Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="student-login.php">Student-Login <span class="sr-only">(current)</span></a>
      </li>
      
    </ul>
  </div>
</nav>

<div class="fo">
<form action="admin-login.php" method="post">
<h1>Welcome To  Admin Login</h1><br>
<input type="text" name="admin-id" placeholder="Admin Id"/><br>
<input type="password" name="password" placeholder="Password"/><br><br>
<button class="button" >Login</button>
<form>
</div>
</body>
</html>
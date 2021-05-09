<?php

$login = false;
$showError=false;

if($_SERVER["REQUEST_METHOD"]=="POST"){
  include 'dbconnect.php';

$student=$_POST["student"];
$pass=$_POST["pass"];

$sql="SELECT * from students where ID='$student' AND password='$pass'  ";
$result= mysqli_query($conn, $sql);
$num=mysqli_num_rows($result);

if($num== 1){

$login = true;

session_start();

header("location:student-dashboard.php");
}
else
{
  
  echo 'Wrong credentials';
}

}




?>




<html>
<head><title>Student-Login</title>
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
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      
    </ul>
  </div>
</nav>
<div class="fo">
<form action="student-login.php" method="POST">
<h1>Welcome To  Student Login</h1><br>
<input type="text" name="student" placeholder="Student ID"/><br>
<input type="password" name="pass" placeholder="Password"/><br><br>
<label>Note:Password:Last 4 digit of your Id @ 3 letters of first name</label>
<button  class="button" >Login</button>
</form>
</div>
</body>
</html>
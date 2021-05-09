<?php
  $showAlert =false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
include 'dbconnect.php';

 
 $teacher=$_POST["teacher"];
$course=$_POST["course"];


$sql="INSERT INTO `teachers` ( `NAME`, `COURSE`) VALUES ('$teacher', '$course')";
$result=mysqli_query($conn,$sql);
if($result){
$showAlert =true;

}




}

?>
<html>
<head>
<title>AddTeacher</title>

<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style>
.dashview{
border-radius:25px;
padding:20px;
width:1500px;
height:720px;
border: 2px solid #73AD21;
margin:auto;
}
.dashview h1{
text-align:center;
font-family:arial;
font-size:20px;
}
.dashview carousel-inner{
width:1300px;
height:500px;


}
</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="student-dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">View Teachers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">View Course</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="addteacher.php">Add Teacher</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
        
      </li>
    </ul>
  </div>
</nav>
<?php
if($showAlert){
echo '<div class="alert alert-success" role="alert">
  This is a success alert—check it out!
</div>';
}
?>
<br><br>

<div class="dashview">
<h1>Fill The Following Details</h1>



<form action="addteacher.php" method="post">
  <div class="form-group col-md-6">
    <label for="Name">Enter Teacher Name</label>
    <input type="text"  name="teacher" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
    
  </div>
  <div class="form-group col-md-6">
    <label for="course">Course</label>
    <input type="text"  name="course" class="form-control" id="exampleInputPassword1" placeholder="Course Name">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

 
    
  </div>
</div>
</div>
</body>
</html>

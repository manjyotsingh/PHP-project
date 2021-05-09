<html>
<head>
<title>Teachers</title>

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
        <a class="nav-link" href="admin-dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacher.php">View Teachers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses.php">View Courses</a>

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
<br><br>

<div class="dashview">
<h1>List of Teachers</h1>
<br>
<br>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Course</th>
   </tr>
  </thead>
  <tbody>
   <?php
  $conn=mysqli_connect("localhost","root","","assign-9");
   $sql="SELECT ID,NAME,COURSE from teachers";
   $result=$conn->query ($sql);
   if($result ->num_rows>0){
while ($row=$result->fetch_assoc()){

  echo "<tr><td>".$row["ID"]."</td><td>".$row["NAME"]."</td><td>".$row["COURSE"]."</td></tr>";

}}
else {
  echo "0 result";
}


   
   
   ?>
  </tbody>
</table>
    
  </div>
</div>
</div>
</body>
</html>

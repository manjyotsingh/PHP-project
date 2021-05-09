<html>
<head>
<title>Student Dashboard</title>

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
.dashview h2{
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
        <a class="nav-link" href="teacher-student.php">Course Teachers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="courses-student.php">Courses available</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="grades.php">Grades</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Logout</a>
        
      </li>
    </ul>
  </div>
</nav>
<br><br>

<div class="dashview">
<br>
<h2>Welcome To  Your Student Dashboard</h2>
<br>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/student.jpg" class="d-block w-100" alt="...">
    </div>
    
  </div>
</div>
</div>
</body>
</html>

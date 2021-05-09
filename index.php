<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="css/choo.css"/>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


<title>Matrix College</title>
</head>
<body background="images/bg.jpg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">MatrixCollege</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
    </ul>
  </div>
</nav>
<div class="fo">

<h1>Welcome To  Matrix College</h1><br>
<h2>Choose the login type</h2><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button onclick="ru()" class="button">Admin</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onclick="stud()" class="button" >Student</button>
</div>
<script>
function ru(){
alert("You selected to login as admin");
window.open("admin-login.php","_self");
}
function stud(){
alert("You selected to login as student");
window.open("student-login.php","_self");
}
</script>
</body>
</html>
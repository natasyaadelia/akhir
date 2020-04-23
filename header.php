<?php 
  session_start();

  if(!(isset($_SESSION['id_petugas'])))
  {
    header("Location: http://localhost/covid/login/index.php");
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="http://localhost/covid/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/covid/aset/fontawesome/css/all.min.css">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a class="navbar-brand"href="#"> RSD Mardi Waluyo</a>
   <button class="navbar-toggler"type="button"data-toggle="collapse"data-target="#navbarNavAltMarkup">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link" href="http://localhost/covid/index.php">Dashboard</a>
        <a class="nav-item nav-link" href="http://localhost/covid/login/logout.php">Logout</a>

        </div>
    </div>

</div>
</nav>
<script src="https://localhost/covid/aset/jquery.js"></script>
<script src="https://localhost/covid/aset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

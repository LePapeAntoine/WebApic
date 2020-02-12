<html>
<!DOCTYPE html>
<html>
<head>
  <title>Apic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">

      <ul class="nav navbar-nav">
        <li><img src="images/logo.png" class="logoBee"></li>
        <li><a href="index.php?page=1"><span class="glyphicon glyphicon-home"></span> Accueil</a></li>
        <li><a href="index.php?page=2"><span class="glyphicon glyphicon-list"></span> Formations</a></li>
        <li><a href="index.php?page=3"><span class="glyphicon glyphicon-book"></span> Catalogue</a></li>
        <li><a href="index.php?page=4"><span class="glyphicon glyphicon-comment"></span> Contact</a></li>
			
      </ul>

      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> <?php 
          if(isset($_SESSION["mail"])== 1){
              print_r($_SESSION["mail"]);
            }else{
                echo "Mon compte";} ?>
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?page=6"> Connexion</a></li>
            <li><a href="index.php?page=7"> Inscription</a></li>
          </ul>
        </li>
</div> 
</div>
</nav>
</header>
<br>
          
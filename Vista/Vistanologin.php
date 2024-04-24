<?php 
@session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>
     <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- Datatable -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">

    <style>
        

        div{
            align-items: center;
            align-content: center;
            text-align: center;
        }
        .navbar {
            background-color: #718EA4; 
  
        }
        .nav-link{

            color: white;

        }
        .dropdown{
            float:right;
        }
        .dropdown-item{
            display: flex;
            align-items: center;
  
        }
        .avatares{
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .avatar{
            margin-top: 5px;
            float:right;
            display: flex;
            justify-content: center;
            align-self: center;
            width: 40px;
            height: 40px;   
        }
        .login{
            color:white;
        }
        @media (max-width: 767px) {
            .navbar-nav {
                flex-direction: column;
                text-align: center;
            }

            .nav-link {
                padding: 10px 0;
            }

            .dropdown {
                float: none;
                text-align: center;
            }
        }
    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Covid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  aria-expanded="false">
            Usuario
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="index.php?user=Invitado&opcion=login">Login</a></li>
            <li><a class="dropdown-item" href="index.php?user=Invitado&opcion=rexistro">Rexistro</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php?user=Invitado&opcion=virus">Virus19</a>
        </li>
        <ul style="float:right">

          <a class="nav-link " aria-current="page" href="index.php">Invitado</a>

      </ul>
      </ul>
    </div>
  </div>
</nav>


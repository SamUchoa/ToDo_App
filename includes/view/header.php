<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous" defer></script>
    <title>ToDo App</title>
</head>
<body class="bg-light h-100">
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

            <div class="container">

                <button class="navbar-toggler border-0 shadow-none" aria-expanded="false" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

                    <span class="navbar-toggler-icon" style="height: 80px;width: 40px;background-image: url('img/dots.png');"></span>

                  </button>
                  <div>
                    <a class="navbar-brand fs-1 h1" href="#"><img src="img/Logo.png" alt="todo"></a>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php
                        if (!isset($_SESSION['userId'])){
                        ?>  
                            <li class="nav-item"><a href="index.php" class="nav-link">Sing up</a></li>
                            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
                        <?php
                        } else{
                        ?>  
                            <li class="nav-item"><a href="myTasks.php" class="nav-link">My Tasks</a></li>
                            <li class="nav-item"><a href="includes/logoff.php" class="nav-link">Logoff</a></li>
                        <?php 
                        }
                        ?>

                    </ul>
                  </div>


            </div>
        </nav>
    </header>

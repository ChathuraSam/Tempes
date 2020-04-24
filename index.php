<?php
  require_once "get-data.php";
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Tempes - The Weather Status</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./css/cover.css" rel="stylesheet">
</head>

<body class="text-center">

  <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-auto">
      <div class="inner">
        <h3 class="masthead-brand">Tempes</h3>
        <nav class="nav nav-masthead justify-content-center">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="https://github.com/ChathuraSam/Tempes" target="new">Code</a>
        </nav>
      </div>
    </header>

    <main role="main" class="inner cover">
      <h1 class="cover-heading">Find the weather of your city.</h1>
      <p class="lead">Tempes can find current weather instantly. It use openweathermap API to get the details</p>

    </main>

    <div class="container">
      <form action="index.php" method="GET">
        <div class="form-row align-items-center">
          <div class="col">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Ex: Badulla" name="city">
          </div>


          <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>



<?php
  if(isset($data)){
    if ($data->cod == '404') {
      echo "<span class='city'>City Not Found</span>";
    } else {
        echo "<h1>".$data->main->temp_max."°C</h1>";
      }
  }
  

?>



<footer class="mastfoot mt-auto">
  <div class="inner">
    <p>Tempes by <a href="https://www.linkedin.com/in/chathura-samarajeewa-07b900111/" target="new">Chathura Samarajeewa</a>
    </div>
  </footer>
</div>




<!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="../../../../assets/js/vendor/popper.min.js"></script>
  <script src="../../../../dist/js/bootstrap.min.js"></script>
</body>
</html>
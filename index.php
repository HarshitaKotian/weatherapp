<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My weather app</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body {
          
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body class="bg-info">
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Weather App</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About this app</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Delhi</a></li>
              <li><a class="dropdown-item" href="#">Seattle</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Banglore</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link">Usage guide</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input id="city" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-warning" type="submit" id="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1 class="my-4 text-center">Weather for <span id="cityName"></span></h1>
    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Temperatures</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><span id="temp2"></span><small class="text-muted fw-light"><sup><span>&#8451;</span></sup></small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Temperature is <span id="temp"></span></li>
                <li>Min temperature is <span id="min_temp"></span></li>
                <li>Max temperature is <span id="max_temp"></span></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Humidity Info</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><span id="humidity2"></span><small class="text-muted fw-light">%</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Feels like is <span id="feels_like"></span></li>
                <li>Humidity is <span id="humidity"></span></li>
                <li>Wind degree is <span id="wind_degrees"></span></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">Wind Info</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title"><span id="wind_speed2"></span><small class="text-muted fw-light"> km/h</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Wind speed is <span id="wind_speed"></span></li>
                <li>Sunrise is <span id="sunrise"></span></li>
                <li>Sunset is <span id="sunset"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <h2 class="display-6 text-center mb-4">Weather of other common places</h2>

      <div class="table-responsive">
        <table class="table text-center">
          <thead>
            <tr>
              <th style="width: 34%;"></th>
              <th style="width: 22%;"> Feels_like</th>
              <th style="width: 22%;"> Humidity</th>
              <th style="width: 22%;"> Max_temp</th>
              <th style="width: 22%;"> Min_temp</th>
              <th style="width: 22%;"> Sunrise</th>
              <th style="width: 22%;"> Sunset</th>
              <th style="width: 22%;"> Temp</th>
              <th style="width: 22%;"> Wind_degre</th>
              <th style="width: 22%;"> Wind_speed</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $city=['Shangai','Boston','Lucknow','Tokyo','Kolkata','London'];
            for($i=0;$i<6;$i++) {
            ?>
            <tr class="element">
              <th scope="row" class="text-start"><?php echo $city[$i];?></th>
              <td><span id="feels<?php echo $i;?>"></span></td>
              <td><span id="humid<?php echo $i;?>"></span></td>
              <td><span id="max<?php echo $i;?>"></span></td>
              <td><span id="min<?php echo $i;?>"></span></td>
              <td><span id="rise<?php echo $i;?>"></span></td>
              <td><span id="set<?php echo $i;?>"></span></td>
              <td><span id="tem<?php echo $i;?>"></span></td>
              <td><span id="degree<?php echo $i;?>"></span></td>
              <td><span id="speed<?php echo $i;?>"></span></td>  
            </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>
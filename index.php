<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Language" content="pl" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <script src="js/bootstrap.bundle.min.js"></script>
  <meta name="description" content="My hobby is NBA">
  <meta name="keywords" content="NBA, Basketball">
  <meta name="author" content="Jakub Burandt">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <script src="js/timedate.js" type="text/javascript"></script>
  <script src="js/kolorujtlo.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body onload="startclock()">
  <div class="container-fluid nav">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <img src="img/NBA_logoV2.png" />
        </div>
        <div class="col-7 nav-content">
          <ul>
            <li>
              <a href="index.php?idp=home">HOME</a>
            </li>
            <li>
              <a href="index.php?idp=teams">TEAMS</a>
            </li>
            <li>
              <a href="index.php?idp=players">PLAYERS</a>
            </li>
            <li>
              <a href="index.php?idp=about">ABOUT NBA</a>
            </li>
            <li>
              <a href="index.php?idp=contact">CONTACT</a>
            </li>
            <li>
              <a href="index.php?idp=movies">MOVIES</a>
            </li>
          </ul>
        </div>
        <div class="col-2">
          <div id="zegarek"></div>
          <div id="data"></div>
        </div>
      </div>
    </div>
  </div>

  <?php
  error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $baza   = 'moja_strona';

  $conn = mysqli_connect($dbhost , $dbuser, $dbpass, $baza);

  if (mysqli_connect_errno()) {
    echo "Bledy przy mysqli_connect " . mysqli_connect_error();
    exit();
  }
  mysqli_close($conn);

  include('cfg.php');
  include('showpage.php');


  if ($_GET['idp'] == ''){
    $strona = PokazPodstrone(1, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'home'){
    $strona = PokazPodstrone(1, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'teams'){
    $strona = PokazPodstrone(2, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'players'){
    $strona = PokazPodstrone(3, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'about'){
    $strona = PokazPodstrone(4, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'contact'){
    $strona = PokazPodstrone(5, $link);
    echo $strona;
    mysqli_close($link);
  }

  if ($_GET['idp'] == 'movies'){
    $strona = PokazPodstrone(6, $link);
    echo $strona;
    mysqli_close($link);
  }
  ?>

  <footer>
    <div class="container">
      <span class="text-white pt-5">
        Copyright © Jakub Burandt
      </span>
      <?php
      $nr_indeksu='134508';
      $nrGrupy = '1';
      
      echo '<br/><br/><br/>Jakub Burandt, '.$nr_indeksu.', grupa '.$nrGrupy.'<br/>';
      ?>
    </div>
  </footer>
</body>

</html>

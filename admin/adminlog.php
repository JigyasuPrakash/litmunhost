<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$uname = "admin";
$pass = "pass";

session_start();

if (isset($_SESSION['uname'])) {
  //we are logged in
  echo "";
} else {
  if ($_POST['uname'] == $uname && $_POST['pass'] == $pass) {
    $_SESSION['uname'] = $uname;
    echo "<script>location.href='adminlog.php'</script>";
  } else {
    echo "<script>alert('INVALID User Name or Password.. Please try again')</script>";
    echo "<script>location.href='admin.html'</script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LIT MUN'19 | Admin</title>
  <link rel="shortcut icon" type="image/png" href="../img/tabicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/aq.css">
  <link rel="stylesheet" href="../css/ars.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: rgb(255, 254, 234)">
  <div class="container-fluid navbar-fixed-top">
    <nav class="navbar navbar-default" style="background-color: rgb(218, 218, 218)">
      <div class="container-fluid">
        <div class="navbar-header">

          <a class="navbar-brand active" href="../index.html" style="color: black; background-color: rgb(243, 243, 243)">L I
            T M U N &nbsp;&nbsp;' 1 9 '</a>
        </div>
      </div>
    </nav>
  </div>
  <div class="container" style="margin-top: 20%; margin-bottom: 15%">
    <div class=" row" style="width:auto">
      <form method="POST">
        <div class="col-sm-3 text-center">
          <label for="name" style="font-size: 16px; padding-top: 1%">Registration ID : </label>
        </div>
        <div class="col-sm-7 input-group">
          <span class="input-group-addon" id="basic-addon1">LITMUN19</span>
          <input type="text" class="form-control" name="regid" aria-describedby="basic-addon1">
        </div>
        <div class="row text-center" style="margin-top: 8%">
          <a href="logout.php" class="btn btn-primary">Sign Out</button></a>
          <input class="btn btn-success" style="margin-left: 5%" type="submit" formaction="fetch.php" value="Search Details">
        </div>
      </form>
    </div>
  </div>
  <div class="container-fluid">
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <div class="w3-row">
        <p align="center">Developed By <br><br>
          <a href="https://www.linkedin.com/in/jigyasu-prakash-175807182" target="_blank" style="color: lightblue">JIGYASU&NonBreakingSpace; PRAKASH</a>&nbsp;
          &&nbsp;
          <a href="https://www.linkedin.com/in/ashutosh-katpatal-2856b618a/" target="_blank" style="color: lightblue">ASHUTOSH&NonBreakingSpace; KATPATAL</a><br>
      </div>
    </footer>
  </div>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
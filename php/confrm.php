<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>
<!doctype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>LIT MUN'19 | Confirmation</title>
  <meta name="GENERATOR" content="Evrsoft First Page">
  <link rel="shortcut icon" type="image/png" href="../img/tabicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/aq.css">
  <link rel="stylesheet" href="../css/ars.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<script>
  var stat = false;

  function myFun() {
    if (stat == false) {
      stat = true;
    } else {
      stat = false;
    }
  }
</script>
<script>
  window.addEventListener('mouseup', function(event) {
    var box = document.getElementById('dmenu');
    if (event.target != box && event.target.parentNode != box && stat == true) {
      document.getElementById("dmenu").click();
      stat = false;
    }
  });
</script>

<body style="background-color: white">
  <div class="container-fluid navbar-fixed-top">
    <nav class="navbar navbar-default" style="background-color: rgb(218, 218, 218)">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" id="dmenu" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" onclick="myFun()">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html" style="color: black; background-color: rgb(243, 243, 243)">L I T
            M U N ' 1 9</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="w3-bar-item w3-button" href="../index.html" style="color: black">Home</a></li>
            <!--<li><a class="w3-bar-item w3-button" href="../html/gallery.html" style="color: black">Gallery</a></li>-->
            <li><a class="w3-bar-item w3-button" href="../html/comm.html" style="color: black">Committees</a></li>
            <li><a class="w3-bar-item w3-button" href="../html/reg.html" style="color: black">Registration</a></li>
            <!--<li><a class="w3-bar-item w3-button" href="../html/exec.html" style="color: black">Executive Board</a></li>-->
            <li><a class="w3-bar-item w3-button" href="../html/sec.html" style="color: black">Secretariat</a></li>
            <!--<li><a class="w3-bar-item w3-button" href="../html/board.html" style="color: black">Advisory Board</a></li>
            <li><a class="w3-bar-item w3-button" href="../html/spon.html" style="color: black">Sponsors</a></li>-->
            <li><a class="w3-bar-item w3-button" href="../html/contact.html" style="color: black">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <?php
  $price = "";
  $category = "";
  $comma = "";
  $commb = "";
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $numb = $_POST['numb'];
  $cat = $_POST['cat'];
  $optradio = $_POST['optradio'];
  $scname = $_POST['scname'];
  $coma = $_POST['coma'];
  $comb = $_POST['comb'];
  $del = $_POST['del'];
  $premun = $_POST['premun'];
  $knowmun = $_POST['knowmun'];

  switch ($cat) {
    case 1:
      $price = 800;
      $category = "Local Delegate - INR 800";
      break;
    case 2:
      $price = 3000;
      $category = "Out Station Delegate - INR 3000";
      break;
    case 3:
      $price = 800;
      $category = "International Press - INR 800";
      break;
  }

  switch ($coma) {
    case "UNSC":
      $comma = "United Nations Security Council";
      break;
    case "UNGA DISEC":
      $comma = "United Nations General Assembly DISEC";
      break;
    case "UNEP":
      $comma = "United Nation Environment Program";
      break;
    case "HRC":
      $comma = "Human Rights Council";
      break;
    case "LOK":
      $comma = "Loksabha";
      break;
    case "HCC":
      $comma = "Historic Crisis Committee";
  }

  switch ($comb) {
    case "UNSC":
      $commb = "United Nations Security Council";
      break;
    case "UNGA DISEC":
      $commb = "United Nations General Assembly DISEC";
      break;
    case "UNEP":
      $commb = "United Nation Environment Program";
      break;
    case "HRC":
      $commb = "Human Rights Council";
      break;
    case "LOK":
      $commb = "Loksabha";
      break;
    case "HCC":
      $commb = "Historic Crisis Committee";
  }

  $ordid = "LITMUN19" . rand(10000, 99999999);
  $cid = $fname . $numb;

  ?>


  <div class="container" style="padding-top: 2%">
    <div class="w3-container" style="margin-top:40px; margin-bottom:5px">
      <div class="w3-panel w3-center w3-black">
        <h1><b>REGISTRATION</b></h1>
      </div>
      <div class="row" style="border-style: double; background-color: rgb(218,216,216); margin-bottom: 2%">
        <div class="w3-container" style="margin-bottom:5px">
          <div class="w3-panel w3-center w3-black">
            <h3><b>CONFIRM &nbsp; DETAILS</b></h3>
          </div>
        </div>
        <div class="container">
          <form class="form" method="POST">
            <div class="from-group">
              <div class="row" style="width:auto">
                <div class="col-sm-3 text-center">
                  <label for="name" style="padding-top: 1%">Name : </label>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="fname" size="25" value="<?php echo $fname; ?>" readonly>
                </div>
                <div class="col-sm-4">
                  <input type="text" class="form-control" name="lname" size="25" value="<?php echo $lname; ?>" readonly>
                </div>
              </div>
              <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center">
                  <label for="email" style="padding-top: 1%">Email : </label>
                </div>
                <div class="col-sm-8">
                  <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" readonly>
                </div>
              </div>
              <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center">
                  <label for="numb" style="padding-top: 1%">Mobile :</label>
                </div>
                <div class="col-sm-8">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">+91</span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $numb; ?>" readonly>
                    <input hidden type="text" name="numb" value="<?php echo "+91" . $numb; ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="cat" style="padding-top: 1%">Registration Type :</label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" class="form-control" value="<?php echo $category; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="gender" style="padding-top: 1%">Gender : </label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" name="optradio" class="form-control" value="<?php echo $optradio; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="scname" style="padding-top: 1%">School/College Name : </label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" name="scname" class="form-control" value="<?php echo $scname; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="coma" style="padding-top: 1%">Committee Preference 1 :</label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" class="form-control" value="<?php echo $comma; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="comb" style="padding-top: 1%">Committee Preference 2 :</label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" class="form-control" value="<?php echo $commb; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="del" style="padding-top: 1%">Delegation Preference :</label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" name="del" class="form-control" value="<?php echo $del; ?>" readonly>
              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="premun" style="padding-top: 1%">Any Previous MUN Experience :</label>
              </div>
              <div class="col-sm-8">
                <input type="text" style="width: 100%" name="premun" class="form-control" value="<?php echo $premun; ?>" readonly>

              </div>
            </div>
            <div class="row" style="padding-top: 1%">
              <div class="col-sm-3 text-center">
                <label for="knowmun" style="padding-top: 1%">How did you get to know about LITMUN : </label>
              </div>
              <div class="col-sm-8" style="padding-top: 1%">
                <input type="text" class="form-control" name="knowmun" class="form-control" value="<?php echo $knowmun; ?>" readonly>
              </div>
            </div>

            <!--This fields are required by payment gateway do not change any variable-->
            <input hidden type="text" name="TXN_AMOUNT" value="<?php echo $price; ?>">
            <input hidden name="CHANNEL_ID" value="WEB">
            <input hidden name="INDUSTRY_TYPE_ID" value="Retail">
            <input hidden name="CUST_ID" value="<?php echo  $cid; ?>">
            <input hidden name="ORDER_ID" value="<?php echo  $ordid; ?>">
            <input hidden name="cat" value="<?php echo $cat; ?>">
            <input hidden name="coma" value="<?php echo $coma; ?>">
            <input hidden name="comb" value="<?php echo $comb; ?>">

            <div class="row text-center" style="margin: 2%">

              <p style="color: rgb(223, 18, 18)"><b>"Delegate fees once paid are non refundable."</b></p>

              <a class="btn btn-primary" href="../html/form.html"><i class="fas fa-arrow-left"></i>&nbsp;&nbsp;Go Back</a>
              <button class="btn btn-success" style="margin-left: 4%; margin-right: 4%" type="submit" formaction="paylater.php">Pay Later</button>
              <button class="btn btn-success" type="submit" formaction="paynow.php">Pay Now</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>



  <div class="container-fluid">
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
      <!--
      <div class="w3-half w3-center w3-padding-small">
        <a class="w3-button w3-black w3-border w3-border-grey w3-round-large"
          href="https://docs.google.com/spreadsheets/d/1zh7Fp5vW3osvqiHeiGCDt1H5A_u5lf7IWO4R5PhWmpY/edit?usp=sharing"
          target="_blank"><b>List of Allotment</b></a><br>
      </div>

      <div class="w3-half w3-center w3-padding-small">
        <a class="w3-button w3-black w3-border w3-border-grey w3-round-large"
          href="https://drive.google.com/file/d/0B6mi2CETZjNhbHRKNTJjZHYzdzZ4bXhtcXZ3cjNLbWdCRG84/view?usp=sharing"
          target="_blank"><b>Itinerary and Code of Conduct</b></a><br>
      </div>
    -->
      <div class="w3-row">
        <h4>Follow Us On</h4><br>
        <a class="w3-button btn-lg w3-large w3-light-grey" href="https://www.facebook.com/LITMUN2018/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
        <a class="w3-button btn-lg w3-large w3-light-grey" href="https://www.instagram.com/litmun/" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a>
        <br><br><br>
        <p align="center">Developed & Maintained By <br>
          <a href="https://www.linkedin.com/in/jigyasu-prakash-175807182" target="_blank" style="font-size: 20px; color: lightblue">JIGYASU&NonBreakingSpace; PRAKASH</a><br>

      </div>
    </footer>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>

</html>
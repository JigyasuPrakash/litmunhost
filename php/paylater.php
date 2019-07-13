<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$cat = $_POST['cat'];
$optradio = $_POST['optradio'];

$ORDER_ID = $_POST['ORDER_ID'];
$TXN_AMOUNT = $_POST['TXN_AMOUNT'];
$subject="Litmun Registration 2019";


if ($cat == 1) {
  $price = 800;
  $category = "Local Delegate - INR 800";
}
if ($cat == 2) {
  $price = 3000;
  $category = "Out Station Delegate - INR 3000";
}
if ($cat == 3) {
  $price = 800;
  $category = "International Press - INR 800";
}

include 'cred.php';

$con = mysqli_connect($server, $uname, $upass, $db);
if ($con)
  echo " ";

$query = "INSERT INTO regdetails (RegID, Category, FirstName, LastName, Gender, Email, Mobile, Amount, TxnStat)
          VALUES ('$ORDER_ID',' $cat', '$fname', '$lname', '$optradio', '$email', '$numb', '$TXN_AMOUNT', 'Pending')";
if (mysqli_query($con, $query))
  echo " ";
  
mysqli_close($con);


$txt=" 
Dear ".$fname.",

			   Thank you for participating in LITMUN 2019.
			   
               Your Registration ID is: 	    ".$ORDER_ID."
               ____________________________________________
               Your Registration Fees is: 	".$TXN_AMOUNT."
               ____________________________________________
               Your Transaction: 			      	  Pending
			         ____________________________________________
			   
               Please be present on the day of event.
               
               
                                      - Team LITMUN 2019";
  
  
  $headers="From: litmun19@gmail.com";
  
  //mail($email,$subject,$txt,$headers);

?>


<!doctype html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>LIT MUN'19</title>
  <meta name="GENERATOR" content="Evrsoft First Page">
  <link rel="shortcut icon" type="image/png" href="../img/tabicon.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/aq.css">
  <link rel="stylesheet" href="../css/ars.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: white">
  <div class="container-fluid navbar-fixed-top">
    <nav class="navbar navbar-default" style="background-color: rgb(218, 218, 218)">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.html" style="color: black; background-color: rgb(243, 243, 243)">L I T
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
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>

  <div class="container" style="padding-top: 2%; background-color: rgb(218,216,216)">
    <div class="w3-container" style="margin-top:40px; margin-bottom:5px">
      <div class="w3-panel w3-center w3-black">
        <h1><b>REGISTRATIONS</b></h1>
      </div>
      <div class="container" style="padding-bottom: 2%; padding-right: 4.5%">
        <div class="row" style="border-style: double; margin: auto">
          <div class="w3-container" style="margin-bottom:5px">
            <div class="w3-panel w3-center w3-black">
              <h3><b>REGISTRATION&nbsp; COMPLETED</b></h3>
            </div>
          </div>

          <form class="submit-to-google-sheet" name="f1">
            <input hidden type="text" name="entry.1217998307" value="<?php echo  $ORDER_ID; ?>">
            <input hidden type="text" name="entry.1266131796" value="<?php echo $cat; ?>">
            <input hidden type="text" name="entry.1247256632" value="<?php echo $fname; ?>">
            <input hidden type="text" name="entry.1809604341" value="<?php echo $lname; ?>">
            <input hidden type="text" name="entry.1002842269" value="<?php echo $optradio; ?>">
            <input hidden type="text" name="entry.1941981587" value="<?php echo $email; ?>">
            <input hidden type="text" name="entry.255373602" value="<?php echo  $numb; ?>">
            <input hidden type="text" name="entry.2143107756" value="<?php echo $price; ?>">
           
            
          </form>

          <div class="container">
            <div class="form-group">
              <div class="row text-center" style="width:auto">
                <div class="col-sm-8 col-sm-offset-2">
                  <div class="panel panel-success">
                    <div class="panel-heading">Your Registration ID is: <?php echo $ORDER_ID; ?></div>
                    <p>Event fees payment is pending at your side...</p>
                    <p>A mail is sent to <?php echo $email; ?>, containing Confirmation of Registration.</p><br>
                    <p><b>Note: </b>You can also pay the fees at the event day.</p>
                  </div>
                </div>
              </div>
              <div class="row text-center" style="margin: 10px">
                <a class="btn btn-primary" href="../index.html"><i class="fas fa-home"></i>&nbsp;&nbsp;Go Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
<!--
      <div class="w3-half w3-center w3-padding-small">
        <a class="w3-button w3-black w3-border w3-border-grey w3-round-large" href="https://docs.google.com/spreadsheets/d/1zh7Fp5vW3osvqiHeiGCDt1H5A_u5lf7IWO4R5PhWmpY/edit?usp=sharing" target="_blank"><b>List of Allotment</b></a><br>
      </div>

      <div class="w3-half w3-center w3-padding-small">
        <a class="w3-button w3-black w3-border w3-border-grey w3-round-large" href="https://drive.google.com/file/d/0B6mi2CETZjNhbHRKNTJjZHYzdzZ4bXhtcXZ3cjNLbWdCRG84/view?usp=sharing" target="_blank"><b>Itinerary and Code of Conduct</b></a><br>
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
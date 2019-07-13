<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$regid = $_POST['regid'];
$cat = $_POST['cat'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$amount = $_POST['amount'];
$stat = $_POST['stat'];

if ($regid == "") {
    echo "<script>alert('Registration ID Not Found!!')</script>";
    echo "<script>location.href='../html/contpay.html'</script>";
}
if ($stat == "INVALID") {
    echo "<script>alert('Registration Details not found. Please Register again.')</script>";
    echo "<script>location.href='../html/form.html'</script>";
}
if ($stat == "Success") {
    echo "<script>alert('Your Payment is already Completed.')</script>";
    echo "<script>location.href='../index.html'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIT MUN'19</title>
    <link rel="shortcut icon" type="image/png" href="../img/tabicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/aq.css">
    <link rel="stylesheet" href="../css/ars.css">
    <link rel="stylesheet" href="../css/custom.css">
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
                        <li><a class="w3-bar-item w3-button" href="../html/gallery.html" style="color: black">Gallery</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/comm.html" style="color: black">Committees</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/reg.html" style="color: black">Registration</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/exec.html" style="color: black">Executive Board</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/sec.html" style="color: black">Secretariat</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/board.html" style="color: black">Advisory Board</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/spon.html" style="color: black">Sponsors</a></li>
                        <li><a class="w3-bar-item w3-button" href="../html/contact.html" style="color: black">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container" style="margin-top: 13%; margin-bottom: 8%">
        <form id="form_table" class="form" method="POST">
            <div class="from-group">
                <div class="alert alert-success text-center" role="alert">
                    Registration ID: <?php echo $regid; ?>
                </div>
                <div class="row" style="width:auto">
                    <div class="w3-container" style="margin-bottom:5px">
                        <div class="w3-panel w3-center w3-black">
                            <h3><b>Registration&nbsp; Details</b></h3>
                        </div>
                    </div>
                    <input hidden name="regid" value="<?php echo $regid; ?>">
                    <div class="col-sm-3 text-center">
                        <label for="name" style="font-size: 16px; padding-top: 1%">Name : </label>
                    </div>
                    <div class="col-sm-4">
                        <input id="field1" type="text" class="form-control" size="25" value="<?php echo $fname; ?>" readonly>
                    </div>
                    <div class="col-sm-4">
                        <input id="field2" type="text" class="form-control" size="25" value="<?php echo $lname; ?>" readonly>
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="email" style="font-size: 16px; padding-top: 1%">Email : </label>
                    </div>
                    <div class="col-sm-8">
                        <input id="field3" type="text" class="form-control" value="<?php echo $email; ?>" readonly>
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="numb" style="font-size: 16px; padding-top: 1%">Mobile :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $numb; ?>" readonly>
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="numb" style="font-size: 16px; padding-top: 1%">Gender :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo $gender; ?>" readonly>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center">
                    <label for="cat" style="padding-top: 1%">Category :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" style="width: 100%" class="form-control" value="<?php echo $cat; ?>" readonly>
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center" style="font-size: 16px">
                    <label for="cat" style="padding-top: 1%">Transaction Amount :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" style="width: 100%" class="form-control" value="<?php echo $amount; ?>" readonly>
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center" style="font-size: 16px">
                    <label for="cat" style="padding-top: 1%">Transaction Status :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" style="width: 100%" class="form-control" value="<?php echo $stat; ?>" readonly>
                </div>
            </div>


            <div class="row text-center" style="margin: 2%">
                <a href="form.html" class="btn btn-primary" style="margin-left: 4%; margin-right: 8%">Go Back</a>
                <input class="btn btn-success" type="submit" formaction="paynow.php" value="Make Payment">
            </div>
        </form>
    </div>
    <div class="container-fluid">
        <footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
            <div class="w3-row">
                <p align="center">Developed By <br>
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
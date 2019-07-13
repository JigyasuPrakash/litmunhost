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
    $regid = "Not Found..!!";
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
    <div class="container" style="margin-top: 13%; margin-bottom: 8%">
        <form id="form_table" action="save.php" class="form" method="POST">
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
                        <input id="field1" type="text" class="form-control" name="fname" size="25" value="<?php echo $fname; ?>">
                    </div>
                    <div class="col-sm-4">
                        <input id="field2" type="text" class="form-control" name="lname" size="25" value="<?php echo $lname; ?>">
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="email" style="font-size: 16px; padding-top: 1%">Email : </label>
                    </div>
                    <div class="col-sm-8">
                        <input id="field3" type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="numb" style="font-size: 16px; padding-top: 1%">Mobile :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="numb" value="<?php echo $numb; ?>">
                    </div>
                </div>
                <div class="row" style="padding-top: 1%">
                    <div class="col-sm-3 text-center">
                        <label for="numb" style="font-size: 16px; padding-top: 1%">Gender :</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="gender" value="<?php echo $gender; ?>">
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center" style="font-size: 16px">
                    <label for="cat" style="padding-top: 1%">Category :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" style="width: 100%" name="cat" class="form-control" value="<?php echo $cat; ?>">
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center" style="font-size: 16px">
                    <label for="cat" style="padding-top: 1%">Transaction Amount :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" name="amount" style="width: 100%" class="form-control" value="<?php echo $amount; ?>">
                </div>
            </div>
            <div class="row" style="padding-top: 1%">
                <div class="col-sm-3 text-center" style="font-size: 16px">
                    <label for="cat" style="padding-top: 1%">Transaction Status :</label>
                </div>
                <div class="col-sm-8">
                    <input id="field5" type="text" style="width: 100%" name="stat" class="form-control" value="<?php echo $stat; ?>">
                </div>
            </div>


            <div class="row text-center" style="margin: 2%">
                <input class="btn btn-success" style="margin-left: 4%; margin-right: 8%" type="submit" value="Update Data">
                <a href="adminlog.php" class="btn btn-primary">Check Another</button></a>
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
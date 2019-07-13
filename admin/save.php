<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$uname = "admin";
$pass = "pass";

session_start();

if (isset($_SESSION['uname'])) {
  //this section means we are logged in..
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
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$cat = $_POST['cat'];
$gender = $_POST['gender'];
$amount = $_POST['amount'];
$stat = $_POST['stat'];

include 'cred.php';

$con = mysqli_connect($server, $uname, $upass, $db);
if ($con)
    echo "Connection Established";

$query = "UPDATE regdetails SET Category = '$cat', FirstName = '$fname', LastName = '$lname', Gender = '$gender',
                                          Email = '$email', Mobile = '$numb', Amount = '$amount', TxnStat = '$stat' 
                                          WHERE RegID = '$regid'";
if (mysqli_query($con, $query)) {
    echo "<script>alert('Data Updated Successfully!!')</script>";
    echo "<script>location.href='adminlog.php'</script>";
} else {
    echo "<script>alert('Something went wrong!!.. Please try again..')</script>";
    echo "<script>location.href='admin.html'</script>";
}
mysqli_close($con);
?>
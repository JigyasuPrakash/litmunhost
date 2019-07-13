<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

$regid = "LITMUN19" . $_POST['regid'];

if($regid == "LITMUN19"){
    echo "<script>alert('Please enter your Registration ID!!')</script>";
    echo "<script>location.href='../html/contpay.html'</script>";
}

include 'cred.php';

$con = mysqli_connect($server, $uname, $upass, $db);
if ($con)
    echo "Connection Established";

$query = "SELECT * FROM regdetails WHERE RegId = '$regid'";
if ($result = mysqli_query($con, $query)) {
    $row = mysqli_fetch_array($result);
} else {
    echo "<script>alert('Data Not Found!!')</script>";
    echo "<script>location.href='adminlog.php'</script>";
}
mysqli_close($con);
?>

<html>

<body>
    <form name="f1" action="details.php" method="POST">
        <input hidden type="text" name="regid" value="<?php echo "" . $row['RegID'] . "" ?>">
        <input hidden type="text" name="cat" value="<?php echo "" . $row['Category'] . "" ?>">
        <input hidden type="text" name="fname" value="<?php echo "" . $row['FirstName'] . "" ?>">
        <input hidden type="text" name="lname" value="<?php echo "" . $row['LastName'] . "" ?>">
        <input hidden type="text" name="gender" value="<?php echo "" . $row['Gender'] . "" ?>">
        <input hidden type="text" name="email" value="<?php echo "" . $row['Email'] . "" ?>">
        <input hidden type="text" name="numb" value="<?php echo "" . $row['Mobile'] . "" ?>">
        <input hidden type="text" name="amount" value="<?php echo "" . $row['Amount'] . "" ?>">
        <input hidden type="text" name="stat" value="<?php echo "" . $row['TxnStat'] . "" ?>">
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </form>
</body>

</html>
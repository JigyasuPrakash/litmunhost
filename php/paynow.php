<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
?>

<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$numb = $_POST['numb'];
$cat = $_POST['cat'];
$optradio = $_POST['optradio'];

$ORDER_ID = $_POST['ORDER_ID'];
$TXN_AMOUNT = $_POST['TXN_AMOUNT'];
$CHANNEL_ID = $_POST['CHANNEL_ID'];
$INDUSTRY_TYPE_ID = $_POST['INDUSTRY_TYPE_ID'];
$CUST_ID = $_POST['CUST_ID'];

include 'cred.php';

$con = mysqli_connect($server, $uname, $upass, $db);
if ($con)
    echo "Connection Established";

$query = "INSERT INTO regdetails (RegID, Category, FirstName, LastName, Gender, Email, Mobile, Amount, TxnStat)
                        VALUES ('$ORDER_ID',' $cat', '$fname', '$lname', '$optradio', '$email', '$numb', '$TXN_AMOUNT', 'INVALID')";

if (mysqli_query($con, $query))
    echo " ";

mysqli_close($con);
?>

<html>

<head>
    <title>LIT MUN'19</title>
    <link rel="shortcut icon" type="image/png" href="../img/tabicon.png">
</head>

<body>
    <center>
        <h1>Please wait a while</h1>
        <h2>Please do not refresh this page...</h2>
    </center>
    <form method="post" action="pgRedirect.php" name="f1">
        <input hidden name="email" value="<?php echo $email; ?>">
        <input hidden name="numb" value="<?php echo "+91" . $numb; ?>">
        <input hidden title="TXN_AMOUNT" tabindex="10" name="TXN_AMOUNT" value="<?php echo $TXN_AMOUNT; ?>">
        <input hidden id="CHANNEL_ID" tabindex="4" name="CHANNEL_ID" value="WEB">
        <input hidden id="INDUSTRY_TYPE_ID" tabindex="4" name="INDUSTRY_TYPE_ID" value="Retail">
        <input hidden id="CUST_ID" tabindex="2" name="CUST_ID" value="<?php echo  $CUST_ID; ?>">
        <input hidden id="ORDER_ID" tabindex="1" name="ORDER_ID" value="<?php echo  $ORDER_ID; ?>">
        <script type="text/javascript">
            document.f1.submit();
        </script>
    </form>
</body>

</html>
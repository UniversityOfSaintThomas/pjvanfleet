<?php
// set number of columns to three; the default is 2
$columns = 2;
include "pvfdatabaseConnection.php";
include "pvfheader.php";
include "utilities.php";
$blurbid=100;


ini_set('session.use_trans_sid','0');
ini_set("session.use_only_cookies", "1");
ini_set("arg_separator.output","&");
session_start();

// log faculty in
$user=check_password("contact","Login");

// store faculty info to session id
$query = "SELECT * FROM contact WHERE login='$user'";
$result = mysql_query($query) or die("error!");
while ($line = mysql_fetch_array($result))
{
    $tableid = $line[0];
    $formatUser = $line['first'] . " " . $line['last'];

    $_SESSION['formattedFacultyName'] = $formatUser;
    $_SESSION['ustID'] = $user;
    $_SESSION['mysqlID'] = $tableid;
}

?>

	<div id="column2wide">
		<p>
		<h1 class="pageTitle">MANAGEMENT PAGE</h1>
		</p>
		<p>
		You are logged in as <strong><?php echo($formatUser); ?></strong>.
		</p>
		<p>
		<dl>
		<dt><a href="makeclassDB.php">Create a Class Database</a>
		</dl>
	</div>
<?php
	include "pvfoutlineNavigation.php";
	include "pvffooter.php";
?>
<?php

/*********************************************
 Static Variables for the Site
**********************************************/
$last_update="29 April 2013";

/*********************************************
 Functions for this site
**********************************************/

function authenticate($realm)
{
	Header("WWW-authenticate: basic realm='$realm'");
	Header("HTTP/1.0 401 Unauthorized");
	echo "<div id=\"column2wide\"><h1 class=\"pageTitle\">Authentication Error</h1><p>You must enter a valid user name 		and password to access this portion of the site.</p></div>";
	// include files so that complete page is output on error
	include "pvfoutlineNavigation.php";
	include "pvffooter.php";
	exit;
}

function check_password($dbtable,$realm)
{
	$user=$_SERVER['PHP_AUTH_USER'];
	if(!isset($user))
   		authenticate($realm);
	else
	{
		$password=$_SERVER['PHP_AUTH_PW'];
		$str="select * from ".$dbtable." where login=\"".$user."\" and password = password(\"".$password."\")";
		include "pvfdatabaseConnection.php";
		$q=mysql_query($str) or die("Query failed.");
		if(!mysql_num_rows($q)==1)
			authenticate($realm);
		else
			return($user);
	}
}

// Functions for MakeClassDB

function make_text_select($title,$val,$var)
{
	echo("<strong>".$title.": </strong><select name=\"".$var."\">\n");
	for($k=0;$k<count($val);$k++)
		echo("<option value=\"".$val[$k]."\">".$val[$k]."</option>\n");
	echo("</select>\n");
}

function make_integer_select($title,$start,$stop,$var)
{
	echo("<strong>".$title.": </strong><select name=\"".$var."\">\n");
	for($k=$start;$k<=$stop;$k++)
		echo("<option value=\"".$k."\">".$k."</option>\n");
	echo("</select>\n");
}

function scores_table($nm, $num, $ns)
{
	$stable=$nm."scores";
	$tstring="create table ".$stable."(id int not null primary key auto_increment, ";
	for($k=1;$k<=$num;$k++)
	    if($k<$num)
		$tstring.=$nm.$k." int, ";
	    else
		$tstring.=$nm.$k." int)";
	
	$s=@mysql_query($tstring)
	    or die("Could not create table <b>".$stable."</b>");

	// Populate scores table with zeros.  First create string.

	$str="insert into ".$stable." (";
	
	for($k=1;$k<$num;$k++)
		$str.=$nm.$k.",";

	$str.=$nm.$num.") values (";
	
	for($k=1;$k<$num;$k++)
		$str.="0,";

	$str.="0)";

	for($k=0;$k<$ns;$k++)
		$p=mysql_query($str)
			or die("Did not insert zeros");
	
	if($p && $s)
		echo("<p><img src=\"images/greencheck.gif\"></img>Table <b>".$stable."</b> successfully created.</p>");
	else
		echo("<img src=\"images/redx.gif\"></img>Unable to creat Table <strong>".$stable."</strong>.<br/>\n");

	
}

function info_table($nm)
{
	$itable=$nm."info";
	$istring="create table ".$itable."(id int not null primary key auto_increment, avg float, total int, low int, high 		int)";
	$s=@mysql_query($istring)
	    or die("Could not create table <b>".$itable."</b>");	

	table_integrity($s,$itable);
	/*if($s)
	    echo("Table <b>".$itable."</b> successfully created.<p>");*/
}

function table_integrity($nm,$table)
{
	if($nm)
		echo("<img src=\"images/greencheck.gif\"></img>Table <strong>".$table."</strong> successfully created.<br/>");
	else 
		echo("<img src=\"images/redx.gif\"></img>Unable to creat Table <strong>".$table."</strong>.<br/>\n");

}

?>


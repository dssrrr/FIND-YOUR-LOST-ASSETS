<?php
if(isset($_REQUEST['sb'])){
	session_start();
	$uname=$_REQUEST['uname'];
	$pwd=$_REQUEST['pwd'];
	$_SESSION['uname']=$uname;
	$_SESSION['pwd']=$pwd;
	$conn=mysql_connect('localhost','root','') or die("couldnot connect");
	$db=mysql_select_db("shivani",$conn)or die(mysql_error());
	if($_REQUEST['sb1']=='adminLogin')
	{
		$query1="select * from admins where username='".$uname."' and password='".$pwd."'";
		$ans=mysql_query($query,$conn);
			if (mysql_num_rows($ans)==1)
			{
				header("Location:A_proj.html");
			}
			else
			{
			   header("Location:error.php");
			}
	}
	if($_REQUEST['sb1']=='studentLogin')
	{
		$query1="select * from students where username='".$uname."' and password='".$pwd."'";
		$ans=mysql_query($query,$conn);
			if (mysql_num_rows($ans)==1)
			{
				header("Location:S_proj.html");
			}
			else
			{
			   header("Location:error.php");
			}
	}


	mysql_close($conn);
}
?>


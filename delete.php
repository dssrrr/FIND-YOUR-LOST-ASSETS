<?php
    if (isset($_REQUEST['del']))
	{
		$connection = mysql_connect("localhost","root","")or die("not connected");
		$db = mysql_select_db('shivani',$connection)or die(mysql_error());
		$cnt=0;
		echo $_REQUEST['d'];
		if(!empty($_REQUEST['d'])){
		    foreach($_REQUEST['d'] as $id){
				$query = "delete from founditems where item_id='".$id."'";
				$query_run = mysql_query($query,$connection)or die(mysql_error());
				if($query_run){
					$cnt=$cnt+1;
				}		
		  }
          echo '<script language="javascript">';
          echo 'alert("Data Successfully Deleted"); location.href="lost.php"';
          echo '</script>';
		}
		else{echo "<span style='color:red'>Select any item to delete</span>";}
	}
	
 ?>
 
 

 

 

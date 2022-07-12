<?php

    $connection = mysql_connect("localhost","root","")or die("not connected");
    $db = mysql_select_db('shivani',$connection)or die(mysql_error());

    if(isset($_POST['submit']))
    {
      $id=uniqid();
      $name=$_POST['name'];
      $description=$_POST['description'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	  $date=$_POST['uploadedDate'];
      $contact=$_POST['contact'];
      
      $query = "INSERT INTO `founditems`(`item_id`,`name`,`description`,`image`,`contact`,`uploadedDate`) VALUES ('$id','$name','$description','$file','$contact','$date')";
      $query_run = mysql_query($query,$connection)or die(mysql_error());

      if($query_run){
         echo '<script language="javascript">';
         echo 'alert("Data Successfully Uploaded"); location.href="proj.html"';
         echo '</script>';
      }
      else{
         echo '<script type="text/javascript"> alert("image and details not uploaded") location.href="proj.html" </script>';
      }


    }

 ?>
 
 

 

 

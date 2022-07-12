<?php

  $connection = mysql_connect("localhost","root","")or die('Not Connected');
  $db = mysql_select_db('shivani',$connection) or die(mysql_error());

  $query = " SELECT * FROM `founditems`";
  $query_run = mysql_query($query,$connection)or die(mysql_error());

  while($row = mysql_fetch_array($query_run))
  {
  	?>
  	<tr>
  		
  		<td> <?php echo $row['name']; ?> </td>

  		<td> <?php echo $row['description']; ?> </td>

  		<td> <?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="cannot load image" style=" width: 200px heigth: 200px;">';?> </td>

  		<td> <?php echo $row['contact']; ?> </td>
		<td> <?php echo $row['uploadedDate']; ?> </td>

  		
  	</tr>
  	<?php
  }

?>
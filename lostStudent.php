<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
	<title>Lost an item</title>
</head>
<body>
	<header class="lost-page">
   	 <div>
   	 	<center><h1>SEARCH FOR YOUR LOST ITEMS</h1></center>
   	 </div>
    </header>
    <form>
		<input type="text" name='val' value="" style='float:right'>
		<select name="sort" id="sort" style='float:right'>
		  <option value="searchByName">Search By Name</option>
		  <option value="searchByDate">Search By Date</option>
		</select>
		<br><br>
     <center>	
    	<table width="80%" border="1" cellpadding="12">
    		<thead>
    			<tr style="border-width: 2px;">
				  
					<th style="border-width: 2px;"> ITEM ID </th style="border-width: 2px;">
    				<th style="border-width: 2px;"> NAME </th style="border-width: 2px;">
    				<th style="border-width: 2px;">DESCRIPTION</th style="border-width: 2px;">
    				<th style="text-align: center; border-width: 2px;">IMAGE</th style="border-width: 2px;">
    				<th style="border-width: 2px;">CONTACT DETAILS</th style="border-width: 2px;">
					<th style="border-width: 2px;">DATE AND TIME</th style="border-width: 2px;">
    			</tr style="border-width: 2px;">
    		</thead>
    		<?php

                $connection = mysql_connect("localhost","root","")or die("not connected");
                $db = mysql_select_db('shivani',$connection)or die(mysql_error());
				
				if (isset($REQUEST['sort']))
				{
					$op=$REQUEST['sort'];
					if ($op=='searchByName')
					{
						$query = " SELECT * FROM `founditems` where name='".$_REQUEST['val']."' ORDER BY name;";	
					}
					else
					{
					    $query = " SELECT * FROM `founditems` where date='".$_REQUEST['val']."' ORDER BY name;";	
					}
				}
                
                $query_run = mysql_query($query,$connection)or die(mysql_error());

                while($row = mysql_fetch_array($query_run))
               {
				   $id=$row['item_id']; 
					
  	        ?>
			    
  	             <tr style="border-width: 2px;">				 
                    <td style="border-width: 2px;"> <?php echo $id; ?> </td style="border-width: 2px;">
  		            <td style="border-width: 2px;"> <?php echo $row['name']; ?> </td style="border-width: 2px;">

  		            <td style="border-width: 2px;"> <?php echo $row['description']; ?> </td style="border-width: 2px;">

  		            <td style="border-width: 2px; align-content:center"> 
					<?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="NO image attached" style="width: 150px; height: 150px; ">';?> 
                    </td style="border-width: 2px;">

  		            <td style="border-width: 2px;"> <?php echo $row['contact']; ?> </td style="border-width: 2px;">
					<td style="border-width: 2px;"> <?php echo $row['date_nd_time']; ?> </td style="border-width: 2px;">
					
  	             </tr style="border-width: 2px;">
  	            <?php
               }
			    ?>
    	</table>
      </center>	
    </form>

</body>
</html>

 

 

 

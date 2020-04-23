<?php	
	$con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die("conection failed: " . mysqli_conect_error());
	}
	mysqli_select_db($con,"cse");
	$result=mysqli_query($con,"select * from placement_info");
    echo(" <h1 align='center' style='color:red'> DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING </h1>\n ");
	echo(" <h2 align='center' style='color:blue'> Placements information </h2> ");
	
	if(!$result)
	{
		echo mysqli_error($con);
		exit;
	}
    else
    {
		echo " <table border='5' align='center' cellpadding='10px' style='width:50%' > 
			   <tr>
		       <th style='color:SlateBlue'> company name </th>
			   <th style='color:SlateBlue'> package </th>
			   <th style='color:SlateBlue'> number of students placed </th>
               </tr>";
		while($row=mysqli_fetch_array($result))
		{
			$r=$row[1]." lakhs";
            echo 	"<tr>		
		        		<td align='center'> $row[0] </td>
		        		<td align='center'> $row[1]</td>
						<td align='center'> $row[2] </td>
		          	</tr>" ;
		}
		echo"</table>";
		echo"</body>";
	}
		
?>

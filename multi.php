<html>
	<head>
	<title>Exercise_1</title>
		<style type="text/css">
		body {
			font-size:12px;
		}
		</style>
	</head>
	<body>
		<table border="0.5">
		<?php
	for( $row = 0; $row < 101; $row++)
	{
		echo "<td $row>".$row ."</td>";
   	}
	for( $row = 1; $row < 101; $row++)
	{
		echo "<tr>";
    		echo "<td $row>".$row ."</td>";
		for( $col=1; $col<101; $col++)
		{
			echo "<td $row x $col = ". $row * $col . " >" .$row*$col . "</td>" ;
		}
		echo "</tr>";
		}
		?>
		</table>
	</body>
</html>

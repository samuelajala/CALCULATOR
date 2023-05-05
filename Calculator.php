<!DOCTYPE html>

<html>
	<head>
		<title>CALCULATOR IN PHP</title>
	</head>
	
<body bgcolor="skyblue">
	
	<center>
	<h2>Simple Calculator</h2>
	<form method = "post" action = "Calculator.php" align="center">
		
		
		<input type ="text" name="value1" size="10" placeholder="Enter value 1"/><br>
		<!--Using the select tag to make a list of options-->
		<select name="operator">
			<option>+</option>
			<option>-</option>
			<option>*</option>
			<option>/</option>
		</select><br>
		<input type ="text" name="value2" size="10" placeholder="Enter value 2"/> <br>
		
		<input type="submit" name="cal" value="Calculate"/>
	
	</form>
	</center>
	<hr>
	
	<?php
	if(isset($_POST['cal'])){
		
		$value1 = $_POST['value1'];
		$value2 = $_POST['value2'];
		$operator = $_POST['operator'];
		
		if($operator=='+'){
			
			echo "<center><h2>Your Answer is: <b style='color:white;'>";
			echo $value1+$value2;
			echo "</b></h2></center>";
		}
		if($operator=='-'){
			
			echo "<center><h2>Your Answer is: <b style='color:white;'>";
			echo $value1-$value2;
			echo "</b></h2></center>";
		}
		if($operator=='*'){
			
			echo "<center><h2>Your Answer is: <b style='color:white;'>";
			echo $value1*$value2;
			echo "</b></h2></center>";
		}
		if($operator=='/'){
			
			echo "<center><h2>Your Answer is: <b style='color:white;'>";
			echo $value1/$value2;
			echo "</b></h2></center>";
		}
		
	}
	
	
	?>






</body>

</html>
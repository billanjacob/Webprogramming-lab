<head>
</head>

<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) 
{
    $units = $_POST['units'];
    if (!empty($units)) 
	{
        $result = calc($units);
        $string = 'Total amount for ' . $units . ' - Rs. ' . $result;
    }
}
function calc($units) 
{
    $cost1 = 2.90;
    $cost2 = 3.70;
    $cost3 = 4.80;
    $cost4 = 6.40;

    if($units <= 50) 
	{
        $total = $units * $cost1;
    }
    else if($units > 50 && $units <= 100) 
	{
        $temp = 50 * $cosst1;
        $remainingunits = $units - 50;
        $total = $temp + ($remainingunits * $cost2);
    }
    else if($units > 100 && $units <= 200) 
	{
        $temp = (50 * 3.5) + (100 * $cost2);
        $remainingunits = $units - 150;
        $total = $temp + ($remainingunits * $cost3);
    }
    else 
	{
        $temp = (50 * 3.5) + (100 * $cost2) + (100 * $cost3);
        $remainingunits = $units - 250;
        $total = $temp + ($remainingunits * $cost4);
    }
    return number_format((float)$total, 2, '.', '');
}

?>

<body>
	<div id="page">
		<h1>Electricity Bill</h1>

		<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" placeholder="Enter Units : " />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>

		<div>
		    <?php echo '<br />' . $string; ?>
		</div>
	</div>
</body>
</html>
<?php
$name1 = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$name4 = $_POST['name4'];
$name5 = $_POST['name5'];
$name6 = $_POST['name6'];
$myArray = Array($name1, $name2, $name3, $name4,$name5,$name6)
?>

<table border='3'>
<tr>
<th>Id</th>
<th>Name</th>
</tr>

<?php
    $x=1;
    for($i=0;$i<6;$i++)
	{
    ?>
        <tr>
       <td><?php echo $x;?></td>
        <td><?php echo $myArray[$i];?></td>
        </tr>
      <?php $x++; }?>
        </table>
    


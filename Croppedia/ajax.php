	<?php
include('includes/dbconnection.php');
?>

<?php
	if(isset($_GET['q'])){
		
    $key=$_GET['q'];
	echo $key;
    $query=mysqli_query($mysqli, "select * from crop_detail where CROP_NAME LIKE '%{$key}%'");
	$row = $query -> fetch_assoc();
    foreach ( $row as $key => $value )
	{
	echo  "<br/>$key: <br /> <br />  <br />  $value<br /><br /><br />";
	}
    echo '<img src="./images/'.strtolower($row['CROP_NAME']).'.jpg" height="200px" width="200px" style="position:absolute;  top: 310;left: 1000;" alt="crop"/>';
	mysqli_close($mysqli);}
?>


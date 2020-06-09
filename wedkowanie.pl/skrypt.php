<?php
	$db = mysqli_connect('127.0.0.1', 'root', '', 'wedkowanie');

	if( $db == False )
	{
		echo "połączenie nie udało się<br>"; 
		echo mysqli_connect_error();
		exit();
	}

	$result = mysqli_query($db, "SELECT `nazwa`, `wystepowanie` FROM `ryby` WHERE styl_zycia=1");

	while (($record = mysqli_fetch_assoc($result)))
	{
		echo "<li>" . $record['nazwa'] . 
		', występowanie: '.$record['wystepowanie']."</li>";
	}

	mysqli_close($db);
?>
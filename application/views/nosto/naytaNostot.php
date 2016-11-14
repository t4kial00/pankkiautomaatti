<h1>Asiakkaat</h1>
<TABLE class="table table-hover">
<thead><tr><th>Noston ID</th><th>Määrä</th><th>Päivämäärä</th><th>Tilin ID</th><th>Automaatin ID</th><thead>
<?php
	foreach ($nosto as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_nosto'].'</td><td>'.$rivi['amount'].'</td><td>'.
		$rivi['date'].'</td><td>'.$rivi['id_tili'].'</td><td>'.$rivi['id_automaatti'].'</td></tr></tbody>';
	
	}
?>
</TABLE>
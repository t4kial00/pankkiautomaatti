<h1>Poista kortti</h1>

<TABLE class="table table-hover">

<thead><tr><th>Tilin ID</th><th>Saldo</th><th>AsiakasID</th></tr><thead>

<?php
	foreach ($tili as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_tili'].'</td><td>'.$rivi['saldo'].'</td><td>'.$rivi['id_asiakas'].'</td>';
		echo '<td><a href="poistaTili/'.$rivi['id_tili'].'"class="btn btn-default btn-sm" >Poista</a>';
		echo'</td></tr></tbody>';
	}
?>

</TABLE>

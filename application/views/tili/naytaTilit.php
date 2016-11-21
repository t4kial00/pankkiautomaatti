<h1>Tilit</h1>
<table class="table table-hover">
<thead>
	<tr><th>Tilin ID</th><th>Saldo</th><th>Etunimi</th><th>Sukunimi</th></tr>
</thead>

<?php
	foreach ($tili as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_tili'].'</td><td>'.$rivi['saldo'].'</td><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>';
		echo '<a href="poistaTili/'.$rivi['id_tili'].'"class="btn btn-default btn-sm">Poista</a></td><td>';
		echo '<a href="naytaValitutKortit/'.$rivi['id_tili'].'" class="btn btn-default btn-sm">Yhdistetyt kortit</a>';
?>


<?php } ?>
		</td></tr></tbody>
		</table>


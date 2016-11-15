<h1>Poista asiakkaita</h1>

<TABLE class="table table-hover">

<thead><tr><th>AsiakasID</th><th>Etunimi</th><th>Sukunimi</th><th>Osoite</th><th>Postinumero</th><th>Postitoimipaikka</th><th>Puhelinnumero</th><th>Sähköposti</th><thead>

<?php
	foreach ($asiakas as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_asiakas'].'</td><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.
		$rivi['osoite'].'</td><td>'.$rivi['postinumero'].'</td><td>'.$rivi['postitoimipaikka'].'</td><td>'.$rivi['puhelinnumero'].'</td><td>'.$rivi['email'].'</td><td>';
		echo '<a href="poistaAsiakas/';
		echo $rivi['id_asiakas'].'">Poista</a>';
		echo '</td></tr></tbody>';
?>

</table>

<h1>Kortit</h1>

<TABLE class="table table-hover">

<thead><tr><th>Kortti ID</th><th>Kortin numero</th><th>PIN</th>	<th>Tilin ID</th><th>AsiakasID</th><th>Etunimi</th><th>Sukunimi</th><thead>

<?php
	foreach ($kortti as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_kortti'].'</td><td>'.$rivi['kortti_nro'].'</td><td>'.$rivi['pin'].'</td><td>'.
		$rivi['id_tili'].'</td><td>'.$rivi['id_asiakas'].'</td><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'];
		echo '<td><a href="poistaKortti/'.$rivi['id_kortti'].'"class="btn btn-default btn-sm" >Poista</a>';
		echo'</td></tr></tbody>';
	}
?>

</TABLE>

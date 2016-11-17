<h1>Asiakkaat</h1>

<TABLE class="table table-hover">

<thead><tr><th>AsiakasID</th><th>Etunimi</th><th>Sukunimi</th><th>Osoite</th><th>Postinumero</th><th>Postitoimipaikka</th><th>Puhelinnumero</th><th>Sähköposti</th><thead>

<?php
	foreach ($asiakas as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_asiakas'].'</td><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.
		$rivi['osoite'].'</td><td>'.$rivi['postinumero'].'</td><td>'.$rivi['postitoimipaikka'].'</td><td>'.$rivi['puhelinnumero'].'</td><td>'.$rivi['email'];
		echo '<td><a href="poistaAsiakas/'.$rivi['id_asiakas'].'"class="btn btn-default btn-sm" >Poista</a></td><td>';

	
?>
	<button type="submit" name="valittutili" value="<?php echo $rivi['id_asiakas'];  ?>" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Yhdistetyt tilit</button>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Yhdistetyt tilit</h4>
				</div>
				<div class="modal-body">
					<p>
										<table class="table table-hover">
					<thead><th>Tilin ID</th><th>Saldo</th><th>Asiakas ID</th></thead>
					<?php
						foreach($tilit as $rivi){
							echo '<tbody><tr><td>'.$rivi['id_tili'].'</td><td>'.$rivi['saldo'].'</td><td>'.$rivi['id_asiakas'].'</td></tr>';
						}
					?>
					</tbody>
					<!--<?php print_r($kortit)?>-->
					</table>
					</p>
				</div>
				<div class="modal-footer">
				</div>
			</div>

		</div>
	</div>
<?php } ?>
		</td></tr></tbody>


</TABLE>

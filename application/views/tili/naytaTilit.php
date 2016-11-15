<h1>Tilit</h1>
<table class="table table-hover">
<thead>
	<tr><th>Tilin ID</th><th>Saldo</th><th>Etunimi</th><th>Sukunimi</th></tr>
</thead>

<?php
	foreach ($tili as $rivi) {
		echo '<tbody><tr><td>'.$rivi['id_tili'].'</td><td>'.$rivi['saldo'].'</td><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>';
	
?>

	<button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#myModal">Yhdistetyt kortit</button>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title">Yhdistetyt kortit</h4>
				</div>
				<div class="modal-body">
					<p>
					<?php print_r($kortit)?>
					</p>
				</div>
				<div class="modal-footer">
				</div>
			</div>

		</div>
	</div>
<?php } ?>
		</td></tr></tbody>

</table>
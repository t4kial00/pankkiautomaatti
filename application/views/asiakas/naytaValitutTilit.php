
					<table class="table table-hover">
						<thead><th>Tilin ID</th><th>Saldo</th></thead>
						<?php
							foreach($tilit as $rivi){
								echo '<tbody><tr><td>'.$rivi['id_tili'].'</td><td>'.$rivi['saldo'].'</td></tr>';
							}
						?>
					</tbody>
				
					</table>

					<a href="<?php echo site_url('asiakas/naytaAsiakkaat');?>" class="btn btn-default btn-sm">Takaisin</a>

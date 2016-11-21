<table class="table table-hover">
					<thead><th>Kortin ID</th><th>Kortin numero</th><th>PIN</th><th>Tilin ID</th></thead>
					<?php
						foreach($kortit as $rivi){
							echo '<tbody><tr><td>'.$rivi['id_kortti'].'</td><td>'.$rivi['kortti_nro'].'</td><td>'.$rivi['pin'].'</td><td>'.$rivi['id_tili'].'</td></tr>';
						}
					?>
					</tbody>
				
					</table>

					<a href="<?php echo site_url('tili/naytaTilit');?>" class="btn btn-default btn-sm">Takaisin</a>
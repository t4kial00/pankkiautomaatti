<h1>Muuta pin</h1>

<div class="ruudut">
	<form class="form-horizontal" method="post" action="muutaPin">
		<!-- Text input-->
		<div class="control-group">
	 		<label for="tili" class="control-label col-xs-2">Tilin numero</label>
	  		<div class="col-xs-10">
	    			<select class="form-control" name="idtili" id="idtili">
		  				<?php
		  					foreach ($kortti as $rivi) {
		  						echo '<option value="'.$rivi['id_kortti'].'">KorttiID: '.$rivi['id_kortti'].' // Tilin ID: '.$rivi['id_tili'].' // Omistaja: '.$rivi['etunimi'].' '.$rivi['sukunimi'].'</option>';
		  					}
		  				?>
		  			</select>			
		  	</div>
	  	</div>

	  	<div class="control-group">
	 		<label for="pin" class="control-label col-xs-2">Saldo</label>
	  		<div class="col-xs-10">
	    		<input id="pin" class="form-control" name="pin" type="text" placeholder="Uusi PIN-koodi">
	  		</div>
	  	</div>
	  	<div class="control-group">
	  		<div class="col-xs-offset-2 col-xs-10">
	  			<button type="submit" name="btnLisaa" class="btn btn-primary">Tallenna</button>
	  		</div>
	  	</div>
	</form>
</div>